<?php

namespace Proyecto\ActivosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ActivosBundle:Default/tools:opciones.html.twig');
    }
}
