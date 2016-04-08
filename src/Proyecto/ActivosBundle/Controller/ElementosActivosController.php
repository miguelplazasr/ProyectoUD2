<?php

namespace Proyecto\ActivosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ActivosBundle\Entity\ElementosActivos;
use Proyecto\ActivosBundle\Form\ElementosActivosType;

/**
 * ElementosActivos controller.
 *
 * @Route("/ud/activos/elementos")
 */
class ElementosActivosController extends Controller
{

    /**
     * Lists all ElementosActivos entities.
     *
     * @Route("/", name="ud_activos_elementos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ActivosBundle:ElementosActivos')->findAll();

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
     * Creates a new ElementosActivos entity.
     *
     * @Route("/", name="ud_activos_elementos_create")
     * @Method("POST")
     * @Template("ActivosBundle:ElementosActivos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ElementosActivos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ud_activos_elementos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a ElementosActivos entity.
     *
     * @param ElementosActivos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ElementosActivos $entity)
    {
        $form = $this->createForm(new ElementosActivosType(), $entity, array(
            'action' => $this->generateUrl('ud_activos_elementos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ElementosActivos entity.
     *
     * @Route("/new", name="ud_activos_elementos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ElementosActivos();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ElementosActivos entity.
     *
     * @Route("/{id}", name="ud_activos_elementos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:ElementosActivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ElementosActivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ElementosActivos entity.
     *
     * @Route("/{id}/edit", name="ud_activos_elementos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:ElementosActivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ElementosActivos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a ElementosActivos entity.
     *
     * @param ElementosActivos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ElementosActivos $entity)
    {
        $form = $this->createForm(new ElementosActivosType(), $entity, array(
            'action' => $this->generateUrl('ud_activos_elementos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ElementosActivos entity.
     *
     * @Route("/{id}", name="ud_activos_elementos_update")
     * @Method("PUT")
     * @Template("ActivosBundle:ElementosActivos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:ElementosActivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ElementosActivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ud_activos_elementos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ElementosActivos entity.
     *
     * @Route("/{id}", name="ud_activos_elementos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ActivosBundle:ElementosActivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ElementosActivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ud_activos_elementos'));
    }

    /**
     * Creates a form to delete a ElementosActivos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_activos_elementos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
}
