<?php

namespace Travel\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TravelAgenceBundle:Default:index.html.twig', array('name' => $name));
    }
}
