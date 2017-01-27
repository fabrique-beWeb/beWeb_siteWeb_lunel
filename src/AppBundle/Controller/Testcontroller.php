<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;




/**
 * Description of Testcontroller
 *
 * @author ludovic-castro
 */
class Testcontroller extends Controller{
    
    /**
 * @Route("/adminroute", name="homeAdmin")
 * @Template("default/pagesAdmin/homeAdmin.html.twig")
 */

    public function Afficher(){
}
}