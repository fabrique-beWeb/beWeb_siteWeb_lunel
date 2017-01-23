<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template("default/index.html.twig")
     */
    public function getHome()
    {
        // replace this example code with whatever you need
        //return $this->render('default/index.html.twig');
    }
}
