<?php

namespace Proyecto\SeguridadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SeguridadBundle:Default/tools:opciones.html.twig');
    }
}
