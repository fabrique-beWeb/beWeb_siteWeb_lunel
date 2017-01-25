<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Partenaire;
use AppBundle\Form\PartenaireType;
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
    /////  Gestion Partenaire 
    
    //// Genere nouvaux Partenaire et appel son formulaire 
    
     /**
   * @Route("/admin/modifPartenaire/", name="modifParte")
   * @Template("default/pagesAdminTest/modifPartenaire.html.twig")
   * @param Request $request
   */
    public function formPartenaire(Request $request){
        // on creer notre objet Partenaire 
        $parte = new Partenaire();
        // on lie notre formulaire a notre entity
        $f = $this->createForm(PartenaireType::class, $parte);
         // et on retourne le formulaire dans notre vue
        return array("formParte"=> $f->createView());
        
    }
    
    /**
     * @Route("/admin/modifPartenaire/update", name="updateParte")
     * 
     */
    function updatePartenaire (Request $request ){
    
     $parte = new Partenaire();
    $f = $this->createForm(PartenaireType::class, $parte);
     // on verifie que la requette est bien de type post
        if ($request->getMethod() == 'POST'){
              $f->handleRequest($request);
//              // on recupere le nom du fichier, on genere un nom numerique aleatoire et on creer un dossier uploads/images 
//            $nomDuFichier = md5(uniqid()).".".$annonce->getPhoto()->getClientOriginalExtension();
//            $annonce->getPhoto()->move('uploads/images', $nomDuFichier);
//            $annonce->setPhoto($nomDuFichier);
            $em = $this->getDoctrine()->getManager();
            // on sauvegarde en local
            $em->persist($parte);
            // et on envoi en base de donnee
            $em->flush();
            
            return $this->redirect($this->generateUrl('home'));
        }
    
    }
}