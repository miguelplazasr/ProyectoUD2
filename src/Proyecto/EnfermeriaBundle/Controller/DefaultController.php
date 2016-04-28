<?php

namespace Proyecto\EnfermeriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnfermeriaBundle:Default/tools:opciones.html.twig');
    }
}
