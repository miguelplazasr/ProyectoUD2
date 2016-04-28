<?php

namespace Proyecto\SalonesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SalonesBundle:Default/tools:opciones.html.twig');
    }
}
