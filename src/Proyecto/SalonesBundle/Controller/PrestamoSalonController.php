<?php

namespace Proyecto\SalonesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\SalonesBundle\Entity\PrestamoSalon;
use Proyecto\SalonesBundle\Form\PrestamoSalonType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * PrestamoSalon controller.
 *
 * @Route("/ud/salones/prestamo")
 */
class PrestamoSalonController extends Controller
{

    /**
     * Lists all PrestamoSalon entities.
     *
     * @Route("/", name="ud_salones_prestamo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SalonesBundle:PrestamoSalon')->findAll();

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
     * Creates a new PrestamoSalon entity.
     *
     * @Route("/", name="ud_salones_prestamo_create")
     * @Method("POST")
     * @Template("SalonesBundle:PrestamoSalon:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PrestamoSalon();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $fecha = $request->get('fecha');
        $horario = $request->get('horario');

        switch($horario){
            case "1":
                $finicio = $fecha." ".'06:00:00';
                $ffin = $fecha." ".'08:00:00';
                break;
            case "2":
                $finicio = $fecha." ".'08:00:00';
                $ffin = $fecha." ".'10:00:00';
                break;
            case "3":
                $finicio = $fecha." ".'10:00:00';
                $ffin = $fecha." ".'12:00:00';
                break;
            case "4":
                $finicio = $fecha." ".'12:00:00';
                $ffin = $fecha." ".'14:00:00';
                break;
            case "5":
                $finicio = $fecha." ".'14:00:00';
                $ffin = $fecha." ".'16:00:00';
                break;
            case "6":
                $finicio = $fecha." ".'16:00:00';
                $ffin = $fecha." ".'18:00:00';
                break;
            case "7":
                $finicio = $fecha." ".'18:00:00';
                $ffin = $fecha." ".'20:00:00';
                break;
            case "8":
                $finicio = $fecha." ".'20:00:00';
                $ffin = $fecha." ".'22:00:00';
                break;
        }
        $sala = $request->get('sala');

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $consulta = $em->getRepository('SalonesBundle:PrestamoSalon')->findByPrestamos($finicio, $ffin, $sala);

            if($consulta){
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Ya existe un prestamo en la fecha y salon establecido'
                );
                return $this->redirectToRoute('ud_salones_prestamo');
            }else{

                $entity->setFechaInicio(new \DateTime($fecha));
                $entity->setFechaFin(new \DateTime($fecha));

                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('ud_salones_prestamo_show', array('id' => $entity->getId())));
            }
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a PrestamoSalon entity.
     *
     * @param PrestamoSalon $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PrestamoSalon $entity)
    {
        $form = $this->createForm(new PrestamoSalonType(), $entity, array(
            'action' => $this->generateUrl('ud_salones_prestamo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PrestamoSalon entity.
     *
     * @Route("/new", name="ud_salones_prestamo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PrestamoSalon();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a PrestamoSalon entity.
     *
     * @Route("/{id}", name="ud_salones_prestamo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SalonesBundle:PrestamoSalon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrestamoSalon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PrestamoSalon entity.
     *
     * @Route("/{id}/edit", name="ud_salones_prestamo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SalonesBundle:PrestamoSalon')->find($id);

        $fecha = $entity->getFechaInicio();

        $dia = date_format($fecha, 'Y-m-d');


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrestamoSalon entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'dia' => $dia,
        );
    }

    /**
    * Creates a form to edit a PrestamoSalon entity.
    *
    * @param PrestamoSalon $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PrestamoSalon $entity)
    {
        $form = $this->createForm(new PrestamoSalonType(), $entity, array(
            'action' => $this->generateUrl('ud_salones_prestamo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PrestamoSalon entity.
     *
     * @Route("/{id}", name="ud_salones_prestamo_update")
     * @Method("PUT")
     * @Template("SalonesBundle:PrestamoSalon:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SalonesBundle:PrestamoSalon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrestamoSalon entity.');
        }

        $fecha = $request->get('fecha');
        $horario = $request->get('horario');

        switch($horario){
            case "1":
                $finicio = $fecha." ".'06:00:00';
                $ffin = $fecha." ".'08:00:00';
                break;
            case "2":
                $finicio = $fecha." ".'08:00:00';
                $ffin = $fecha." ".'10:00:00';
                break;
            case "3":
                $finicio = $fecha." ".'10:00:00';
                $ffin = $fecha." ".'12:00:00';
                break;
            case "4":
                $finicio = $fecha." ".'12:00:00';
                $ffin = $fecha." ".'14:00:00';
                break;
            case "5":
                $finicio = $fecha." ".'14:00:00';
                $ffin = $fecha." ".'16:00:00';
                break;
            case "6":
                $finicio = $fecha." ".'16:00:00';
                $ffin = $fecha." ".'18:00:00';
                break;
            case "7":
                $finicio = $fecha." ".'18:00:00';
                $ffin = $fecha." ".'20:00:00';
                break;
            case "8":
                $finicio = $fecha." ".'20:00:00';
                $ffin = $fecha." ".'22:00:00';
                break;
        }
        $sala = $request->get('sala');


        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $consulta = $em->getRepository('SalonesBundle:PrestamoSalon')->findByPrestamos($finicio, $ffin, $sala);

            if($consulta){
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Ya existe un prestamo en la fecha y salon establecido'
                );
                return $this->redirectToRoute('ud_salones_prestamo');
            }else{
                $entity->setFechaInicio(new \DateTime($fecha));
                $entity->setFechaFin(new \DateTime($fecha));
                $em->flush();
                return $this->redirect($this->generateUrl('ud_salones_prestamo_show', array('id' => $id)));
            }
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a PrestamoSalon entity.
     *
     * @Route("/{id}", name="ud_salones_prestamo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SalonesBundle:PrestamoSalon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PrestamoSalon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ud_salones_prestamo'));
    }

    /**
     * Creates a form to delete a PrestamoSalon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_salones_prestamo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     * @Route("/search/{id}" , name="ud_salones_prestamo_search", options={"expose"=true})
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

    public function calendarioAction()
    {
        return $this->render('SalonesBundle:PrestamoSalon/Calendario:calendario.html.twig');
    }


}
