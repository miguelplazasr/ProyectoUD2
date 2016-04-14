<?php

namespace Proyecto\DeportesBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Proyecto\DeportesBundle\Entity\MultaDeportes;
use Symfony\Component\HttpFoundation\Request;

/**
 * MultaDeportes controller.
 *
 * @Route("/ud/deportes/multas")
 */
class MultaDeportesController extends Controller
{

    /**
     * Lists all MultaDeportes entities.
     *
     * @Route("/", name="ud_deportes_multas")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DeportesBundle:MultaDeportes')->findAll();

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
     * Deletes a MultaDeportes entity.
     *
     * @Route("/{id}", name="ud_deportes_multas_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DeportesBundle:MultaDeportes')->find($id);

            if(!$entity){
                throw $this->createNotFoundException('Unable to find MultaDeportes entity.');
            }

            $em->remove($entity);
            $em->flush();

        }

        return $this->redirect($this->generateUrl('ud_deportes_multas'));
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ud_deportes_multas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
