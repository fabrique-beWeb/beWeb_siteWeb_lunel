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
    public function getTextSection(){
         ///////   Affichage Section 
      $em = $this->getDoctrine();
      $texts = $em->getRepository("AppBundle:Texte")->findAll();
       ///////   Affichage parte 
      $em2 = $this->getDoctrine();
      $part = $em2->getRepository("AppBundle:Partenaire")->findAll();
      //// Retourne vers  twig
      return array ('sectionText' => $texts, "parte" => $part ); 
        
    }
    
    
    
}
