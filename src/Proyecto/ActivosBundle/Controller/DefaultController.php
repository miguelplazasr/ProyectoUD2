<?php

namespace Proyecto\ActivosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ActivosBundle:Default:index.html.twig', array('name' => $name));
    }
}
