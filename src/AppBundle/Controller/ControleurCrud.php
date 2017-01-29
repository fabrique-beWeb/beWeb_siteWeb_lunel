<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ControleurCrud extends Controller {
    
///////////////   Affichage Section 

    /** ///////////////   Affichage Header Page 
     * @Route("/", name="home")
     * @Template("default/index.html.twig")
     * @param Request $request
     */
    public function getHome() {
        //nit Doctrine
        $em = $this->getDoctrine();
        // Utilisaton de du Repository  pour aller chercher tout mes entiter Texte de ma db 
        $texts = $em->getRepository("AppBundle:Texte")->findAll();
        ///////   Affichage parte 
        $em2 = $this->getDoctrine();
        $part = $em2->getRepository("AppBundle:Partenaire")->findAll();
         // Pour form inscription   
        // il map  notre formulaire a notre entity
        $f = $this->createForm(UserType::class);
        
        //// Retourne nos entiter  vers  twig
        return array('sectionText' => $texts, "parte" => $part, "formInscrip"=> $f->createView());
    }

    /**
     * /////// Envois candidature 
     * @Route("/candidatureValid ", name="valideCandidat")
     * 
     */
    public function candidatEnvois(Request $request){
         $em = $this->getDoctrine()->getManager();
        $mail = $request->get('mail');
        $nlBlooen= $request->get('newsletter');         
        
       $Inscreption2 = new User();
      
             $Inscreption2->setMail($mail);
             $Inscreption2->setNewsletter($nlBlooen);
             $Inscreption2->setCandidat(1);
            
       ;
            // on sauvegarde en local
            $em->persist($Inscreption2);
            // et on envoi en base de donnee
            $em->flush();
        
    }




    ///////////////   Affichage Section Promo

    /** /////////////// Affichage Home Promo
     * @Route("/promo", name="homePromo")
     * @Template("default/promo.html.twig")
     */
    public function getHomePromo() {
        
        $em = $this->getDoctrine();
        
        $promosLunel = $em->getRepository("AppBundle:Promos")->findByfkville(1);
        ///////   Affichage parte 
        $em2 = $this->getDoctrine();
        $promosBeziers = $em2->getRepository("AppBundle:Promos")->findByfkville(2);
        //// Retourne vers  twig
        return array('promosLunel' => $promosLunel, "promosBeziers" => $promosBeziers);
        
    }
    
    
    /////////////// Affichage Tronbinoscope
    /** 
     * @Route("/promo/tronbin/{id}", name="tronbiPromo")
     * @Template("default/trombinoscope.html.twig")
     */
      public function getTronbiPromo($id) {
          
          $em = $this->getDoctrine();
          $apprennents = $em->getRepository("AppBundle:User")->findByfkidpromos($id);
          return array ('apprennents' => $apprennents );
          
          
      }
      
      
}
