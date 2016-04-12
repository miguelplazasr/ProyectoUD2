<?php

namespace Proyecto\SeguridadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\SeguridadBundle\Entity\Invitados;
use Proyecto\SeguridadBundle\Form\InvitadosType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Invitados controller.
 *
 * @Route("/ud/seguridad/invitados")
 */
class InvitadosController extends Controller
{

    /**
     * Lists all Invitados entities.
     *
     * @Route("/", name="ud_seguridad_invitados")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SeguridadBundle:Invitados')->findAll();

        $deleteForms = array();

        foreach($entities as $entity){
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return array(
            'entities' => $entities,
            'delete_forms' => $deleteForms
        );
    }
    /**
     * Creates a new Invitados entity.
     *
     * @Route("/", name="ud_seguridad_invitados_create")
     * @Method("POST")
     * @Template("SeguridadBundle:Invitados:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Invitados();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ud_seguridad_invitados_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Invitados entity.
     *
     * @param Invitados $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Invitados $entity)
    {
        $form = $this->createForm(new InvitadosType(), $entity, array(
            'action' => $this->generateUrl('ud_seguridad_invitados_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Invitados entity.
     *
     * @Route("/new", name="ud_seguridad_invitados_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Invitados();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Invitados entity.
     *
     * @Route("/{id}", name="ud_seguridad_invitados_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeguridadBundle:Invitados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Invitados entity.
     *
     * @Route("/{id}/edit", name="ud_seguridad_invitados_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeguridadBundle:Invitados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitados entity.');
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
    * Creates a form to edit a Invitados entity.
    *
    * @param Invitados $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Invitados $entity)
    {
        $form = $this->createForm(new InvitadosType(), $entity, array(
            'action' => $this->generateUrl('ud_seguridad_invitados_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Invitados entity.
     *
     * @Route("/{id}", name="ud_seguridad_invitados_update")
     * @Method("PUT")
     * @Template("SeguridadBundle:Invitados:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeguridadBundle:Invitados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Invitados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ud_seguridad_invitados_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Invitados entity.
     *
     * @Route("/{id}", name="ud_seguridad_invitados_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SeguridadBundle:Invitados')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Invitados entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ud_seguridad_invitados'));
    }

    /**
     * Creates a form to delete a Invitados entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_seguridad_invitados_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @Route("/xmlinv/{id}" , name="ud_seguridad_invitado_xml", options={"expose"=true})
     * @Method("GET")
     */
    public function xmlInvAction($id){
        //defino un documento DOM
        $xml = new \DOMDocument("1.0", "UTF-8");
        //creo los tags
        $xml_tag = $xml->createElement('tag');
        $xml_usuario = $xml->createElement('usuario');
        $xml_iden = $xml->createElement('n_identificacion', $id);
        //defino al hijo de tag
        $xml_tag->appendChild($xml_usuario);
        //defino los hijos de usuario
        $xml_usuario->appendChild($xml_iden);
        //defino el padre
        $xml->appendChild($xml_tag);
        $xml->save('/xampp/htdocs/ProyectoUD2/web/xmlinv/salida/taginv_'.$id.'.xml');

        return new JsonResponse($xml, 200);
    }



    public function findAction(){
        return $this->render('@Seguridad/Invitados/search/searchinv.html.twig');
    }

    /**
     * @Route("/search/{id}" , name="ud_seguridad_invitado_c", options={"expose"=true})
     * @Method("GET")
     */
    public function searchAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $consulta = $em->getRepository('SeguridadBundle:Invitados')->find($id);

        if(!$consulta){
            //throw $this->createNotFoundException('No se encuentra el usuario');
            return new JsonResponse(array('mensaje' =>'El usuario no existe'), 404);
        }

        $id = $consulta->getId();
        $nombres = $consulta->getNombres();
        $apellidos = $consulta->getApellidos();
        $path = $consulta->getPath();

        return new JsonResponse(array(
            'id' => $id,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'path' => $path
        ));
    }
}
