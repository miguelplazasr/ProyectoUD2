<?php

namespace Proyecto\DeportesBundle\Controller;


use Proyecto\DeportesBundle\Form\PrestamoDeportesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\DeportesBundle\Entity\PrestamoDeportes;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Proyecto\DeportesBundle\Entity\MultaDeportes;

/**
 * PrestamoDeportes controller.
 *
 * @Route("/ud/deportes/prestamo")
 */
class PrestamoDeportesController extends Controller
{

    /**
     * Lists all PrestamoDeportes entities.
     *
     * @Route("/", name="ud_deportes_prestamo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DeportesBundle:PrestamoDeportes')->findAll();

        $deleteForms = array();
        $multasForms = array();

        foreach($entities as $entity){
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return array(
            'entities' => $entities,
            'delete_forms' => $deleteForms,
        );
    }

    /**
     * Finds and displays a PrestamoDeportes entity.
     *
     * @Route("/{id}", name="ud_deportes_prestamo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DeportesBundle:PrestamoDeportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrestamoDeportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form'  => $deleteForm->createView(),
        );
    }

    /**
     * Creates a new PrestamoDeportes entity.
     *
     * @Route("/", name="ud_deportes_prestamo_create")
     * @Method("POST")
     * @Template("DeportesBundle:PrestamoDeportes:new.html.twig")
     */
    public function createAction(Request $request){
        $entity = new PrestamoDeportes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $iden = $request->get('users');

        $consulta = $em->getRepository('DeportesBundle:MultaDeportes')->findByUsers($iden);

        if($form->isValid()) {
            try {
                    if($consulta){
                        $this->get('session')->getFlashBag()->add(
                            'danger',
                            'EL usuario tiene una multa existente no se puede hacer el prestamo'
                        );
                        return $this->redirectToRoute('ud_deportes_prestamo');
                    }else{
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($entity);
                        $em->flush();
                        return $this->redirect($this->generateUrl('ud_deportes_prestamo_show', array('id' => $entity->getId())));
                    }
            } catch (\Doctrine\DBAL\DBALException $e){
                $this->get('session')->getFlashBag()->add(
                    'danger',
                    'Solo un prestamo por persona'
                );
                return $this->redirectToRoute('ud_deportes_prestamo');
            }
        }

        return array(
            'entity' => $entity,
            'form' => $form
        );
    }

    /**
     * Creates a form to create a PrestamoDeportes entity.
     *
     * @param PrestamoDeportes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm($entity)
    {
        $form = $this->createForm(new PrestamoDeportesType(), $entity, array(
            'action' => $this->generateUrl('ud_deportes_prestamo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' =>'crear'));

        return $form;
    }

    /**
     * Displays a form to create a new PrestamoDeportes entity.
     *
     * @Route("/new", name="ud_deportes_prestamo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction(){
        $entity = new PrestamoDeportes();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/cantidad/{id}" , name="ud_deportes_prestamo_cantidad", options={"expose"=true})
     * @Method("GET")
     */
    public function cantidadAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $consulta = $em->getRepository('DeportesBundle:InventarioDeportes')->find($id);

        $cantidad = $consulta->getCantidad();

        return new JsonResponse($cantidad);
    }

    /**
     * Deletes a PrestamoDeportes entity.
     * @Route("/{id}", name="ud_deportes_prestamo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {

        $ffactual = new \DateTime();

        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('DeportesBundle:PrestamoDeportes')->find($id);

            $multa = new MultaDeportes();

            if (!$entity){
                throw $this->createNotFoundException('No existe el usuario');
            }

            $ffinal = $entity->getFechaDevolucion();

            $iden = $ffinal->getTimestamp();

            if($ffactual > $ffinal){
                $multa->setId($iden);
                $multa->setDetalle('Se genera multa por que no se entrego a tiempo');
                $multa->setValor(5000);
                $multa->setUsers($entity->getUsers());

                $entity->getIdeportes()->setCantidad($entity->getIdeportes()->getCantidad() + 1);

                $em->persist($multa);
                $em->remove($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'warning',
                    'Prestamo Borrado Correctamente y se envio a multa'
                );
            }else{
                $entity->getIdeportes()->setCantidad($entity->getIdeportes()->getCantidad() + 1);

                $em->remove($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Prestamo Borrado Correctamente'
                );
            }
        }

        return $this->redirect($this->generateUrl('ud_deportes_prestamo'));

    }

    /**
     * Creates a form to delete a PrestamoDeportes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_deportes_prestamo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }



    /**
     * @Route("/search/{id}" , name="ud_deportes_prestamo_search", options={"expose"=true})
     * @Method("GET")
     */
    public function searchAction($id){
        $em = $this->getDoctrine()->getEntityManager();

        $consulta = $em->getRepository('AdminBundle:Usuarios')->find($id);

        if(!$consulta){
            //throw $this->createNotFoundException('No se encuentra el usuario');
            return new JsonResponse(array('mensaje' =>'El usuario no existe'), 404);
        }

        $id = $consulta->getId();

        return new JsonResponse($id);

    }

}

