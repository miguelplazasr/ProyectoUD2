<?php

namespace Proyecto\DeportesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DeportesBundle:Default/tools:opciones.html.twig');
    }
}
