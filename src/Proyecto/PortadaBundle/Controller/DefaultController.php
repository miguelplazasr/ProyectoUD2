<?php

namespace Proyecto\PortadaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortadaBundle:Default:index.html.twig');
    }
}
