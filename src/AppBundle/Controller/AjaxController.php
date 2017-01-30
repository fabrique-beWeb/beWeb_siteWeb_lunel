<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AjaxController extends Controller{
    
       /**
     * /////// Envois candidature 
     * @Route("/candidatureValid ", name="valideCandidat")
     * 
     */
    public function candidatEnvois(Request $request){
         
        $mail = $request->get('mail');
        $nlBlooen= $request->get('newsletter');         
        
       $Inscreption2 = new User();
      
             $Inscreption2->setMail($mail);
             $Inscreption2->setNewsletter($nlBlooen);
             $Inscreption2->setCandidat(1);
            
       $em = $this->getDoctrine()->getManager();
            // on sauvegarde en local
            $em->persist($Inscreption2);
            // et on envoi en base de donnee
            $em->flush();
            
            return null;
        
    }
    
}
