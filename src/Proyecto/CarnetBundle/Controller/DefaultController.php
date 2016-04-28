<?php

namespace Proyecto\CarnetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CarnetBundle:Default:index.html.twig');
    }

    public function carnetAction(){
        return $this->render('CarnetBundle:Default/tools:opciones.html.twig');
    }

    /**
     * @Route("/search/{id}" , name="ud_carnet_search", options={"expose"=true})
     * @Method("GET")
     */

    public function searchAction($id){
        $em = $this->getDoctrine()->getManager();

        $consulta = $em->getRepository('AdminBundle:Usuarios')->find($id);

        if(!$consulta){
            return new JsonResponse(array('mensaje' =>'El usuario no existe'), 404);
        }

        $id = $consulta->getId();
        $nombres = $consulta->getNombres();
        $apellidos = $consulta->getApellidos();
        $codigo = $consulta->getUsername();
        $correo = $consulta->getEmail();
        $path = $consulta->getPath();

        return new JsonResponse(array(
            'id' => $id,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'codigo' => $codigo,
            'correo' => $correo,
            'path' => $path
        ), 200);

    }

    /**
     * @Route("/xml/{id}" , name="ud_carnet_createxml", options={"expose"=true})
     * @Method("GET")
     */
    public function xmlAction($id,$role)
    {
        //defino un documento DOM
        $xml = new \DOMDocument("1.0", "UTF-8");
        //creo los tags
        $xml_tag = $xml->createElement('tag');
        $xml_usuario = $xml->createElement('usuario');
        $xml_iden = $xml->createElement('n_identificacion', $id);
        $xml_role = $xml->createElement('role', $role);
        //defino al hijo de tag
        $xml_tag->appendChild($xml_usuario);
        //defino los hijos de usuario
        $xml_usuario->appendChild($xml_iden);
        $xml_usuario->appendChild($xml_role);
        //defino el padre
        $xml->appendChild($xml_tag);
        $xml->save('/xampp/htdocs/ProyectoUD2/web/xmltags/tag_'.$id.'.xml');

        return new JsonResponse($xml, 200);
    }
}
