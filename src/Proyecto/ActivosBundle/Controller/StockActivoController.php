<?php

namespace Proyecto\ActivosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ActivosBundle\Entity\StockActivo;
use Proyecto\ActivosBundle\Form\StockActivoType;

/**
 * StockActivo controller.
 *
 * @Route("/ud/activos/stock")
 */
class StockActivoController extends Controller
{

    /**
     * Lists all StockActivo entities.
     *
     * @Route("/", name="ud_activos_stock")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ActivosBundle:StockActivo')->findAll();

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
     * Creates a new StockActivo entity.
     *
     * @Route("/", name="ud_activos_stock_create")
     * @Method("POST")
     * @Template("ActivosBundle:StockActivo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new StockActivo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ud_activos_stock_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a StockActivo entity.
     *
     * @param StockActivo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(StockActivo $entity)
    {
        $form = $this->createForm(new StockActivoType(), $entity, array(
            'action' => $this->generateUrl('ud_activos_stock_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new StockActivo entity.
     *
     * @Route("/new", name="ud_activos_stock_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new StockActivo();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a StockActivo entity.
     *
     * @Route("/{id}", name="ud_activos_stock_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:StockActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StockActivo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing StockActivo entity.
     *
     * @Route("/{id}/edit", name="ud_activos_stock_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:StockActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StockActivo entity.');
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
     * Creates a form to edit a StockActivo entity.
     *
     * @param StockActivo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(StockActivo $entity)
    {
        $form = $this->createForm(new StockActivoType(), $entity, array(
            'action' => $this->generateUrl('ud_activos_stock_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing StockActivo entity.
     *
     * @Route("/{id}", name="ud_activos_stock_update")
     * @Method("PUT")
     * @Template("ActivosBundle:StockActivo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ActivosBundle:StockActivo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StockActivo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ud_activos_stock_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a StockActivo entity.
     *
     * @Route("/{id}", name="ud_activos_stock_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ActivosBundle:StockActivo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find StockActivo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ud_activos_stock'));
    }

    /**
     * Creates a form to delete a StockActivo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_activos_stock_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
            ;
    }
}
