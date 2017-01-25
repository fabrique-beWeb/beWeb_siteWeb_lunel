<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Form\TexteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ControleurCrudAdmin extends Controller{
       
    
    ///// Modification Texte 
    
    
    
    /**
     * Methode retourne formulaire TexteType maper sur son entity grace a son id 
     * 
     * @Route("/admin/modifSection/{id}",name ="modifSection" )
     * @Template("default/pagesAdminTest/modifSectionTest.html.twig")
     */
    function modifSection($id){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->find('AppBundle:Texte', $id);
        $f = $this->createForm(TexteType::class, $annonce);
        
        
        return array ('formtexte' => $f ->createView(), "id"=>$id);
    }
    
  /**
   * Cette methode est appelé quand le formulaire est validé 
   * 
   * @Route("/admin/modifSection/update/{id}", name="updateSection")
   */
    public function updateSection(Request $request, $id){
       
        $em = $this->getDoctrine()->getManager();    
         //Cette partie ce fait avent la requet :
        // Je vais cherher sur mon entite encore svg en DB sa classe et la met dans :  $classe_courante
        $idTexte = $em->find('AppBundle:Texte', $id);
        $classe_courante =  $idTexte->getClasse();
        
        // je crees mon nouvaux formulaire 
        $annonce = $em->find('AppBundle:Texte', $id);
        $f = $this->createForm(TexteType::class, $annonce);
        
         // Cette partie ce fait apres la requet  : 
        if ($request->getMethod() == 'POST'){
            $f->handleRequest($request);
            
            
//            Plus tard pour les images :) 
//            $nomDuFichier = md5(uniqid()).".".$annonce->getPhoto()->getClientOriginalExtension();
//            $annonce->getPhoto()->move('uploads/images', $nomDuFichier);
//            $annonce->setPhoto($nomDuFichier);
//            
            // Je (re)donne ma classe  
            $annonce->setClasse($classe_courante);
            // En gros :
                //Je commit j
            $em->merge($annonce);
                //je push
            $em->flush();
                //je retourne vers ... 'name space'
             return $this->redirect($this->generateUrl('home'));
        }
    }
    
}
