<?php

namespace Proyecto\EnfermeriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnfermeriaBundle:Default:index.html.twig', array('name' => $name));
    }
}
