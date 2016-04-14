<?php

namespace Proyecto\ActivosBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\ActivosBundle\Entity\MultaActivos;
use Symfony\Component\BrowserKit\Request;

/**
 * MultaActivos controller.
 *
 * @Route("/ud/activos/multas")
 */
class MultaActivosController extends Controller
{

    /**
     * Lists all MultaActivos entities.
     *
     * @Route("/", name="ud_activos_multas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ActivosBundle:MultaActivos')->findAll();

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
    * Deletes a MultaActivos entity.
    *
    * @Route("/{id}", name="ud_activos_multas_delete")
    * @Method("DELETE")
    */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ActivosBundle:MultaActivos')->find($id);

            if(!$entity){
                throw $this->createNotFoundException('Unable to find MultaActivos entity.');
            }

            $em->remove($entity);
            $em->flush();

        }

        return $this->redirect($this->generateUrl('ud_activos_multas'));
    }


   private function createDeleteForm($id)
   {
        return $this->createFormBuilder()
               ->setAction($this->generateUrl('ud_activos_multas_delete', array('id' => $id)))
               ->setMethod('DELETE')
               ->getForm()
               ;
   }
}
