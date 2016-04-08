<?php

namespace Proyecto\ActivosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Proyecto\ActivosBundle\Form\PrestamoActivoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ActivosBundle\Entity\PrestamoActivo;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * PrestamoActivo controller.
 *
 * @Route("/ud/activos/prestamo")
 */
class PrestamoActivoController extends Controller
{

    /**
     * Lists all PrestamoActivo entities.
     *
     * @Route("/", name="ud_activos_prestamo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ActivosBundle:PrestamoActivo')->findAll();

        $deleteForms = array();

        foreach($entities as $entity){
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return array(
            'entities' => $entities,
            'delete_forms' => $deleteForms,
        );
    }

    /**
     * Finds and displays a PrestamoActivo entity.
     *
     * @Route("/{id}", name="ud_activos_prestamo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:PrestamoActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrestamoActivo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a new PrestamoActivo entity.
     *
     * @Route("/", name="ud_activos_prestamo_create")
     * @Method("POST")
     * @Template("ActivosBundle:PrestamoActivo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PrestamoActivo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $entity->getSactivo()->setCantidad($entity->getSactivo()->getCantidad() - $entity->getCantidad());

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ud_activos_prestamo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form
        );
    }

    /**
     * Creates a form to create PrestamoActivo entity.
     *
     * @param PrestamoActivo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm($entity)
    {
        $form = $this->createForm(
            new PrestamoActivoType(),
            $entity,
            array(
                'action' => $this->generateUrl('ud_activos_prestamo_create'),
                'method' => 'POST'
            )
        );

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PrestamoActivo entity.
     *
     * @Route("/new", name="ud_activos_prestamo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PrestamoActivo();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Deletes a PrestamoActivo entity.
     * @Route("/{id}", name="ud_activos_prestamo_delete")
     * @Method("DELETE")
     */

    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('ActivosBundle:PrestamoActivo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No existe el usuario');
            }

            $entity->getSactivo()->setCantidad($entity->getSactivo()->getCantidad() + $entity->getCantidad());

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                'Prestamo Borrado Correctamente'
            );
        }

        return $this->redirect($this->generateUrl('ud_activos_prestamo'));
    }

    /**
     * Creates a form to delete a PrestamoActivo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_activos_prestamo_delete', array('id' => $id)))
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

    /**
     * @Route("/cantidad/{id}" , name="ud_activos_prestamo_cantidad", options={"expose"=true})
     * @Method("GET")
     */
    public function cantidadAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $consulta = $em->getRepository('ActivosBundle:StockActivo')->find($id);

        $cantidad = $consulta->getCantidad();

        return new JsonResponse($cantidad);
    }

}
