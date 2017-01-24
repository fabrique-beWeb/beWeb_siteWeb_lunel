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
       
    /**
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
   * @Route("/admin/modifSection/update/{id}", name="updateSection")
   */
    public function updateSection(Request $request, $id){
        // on recupere l'entity photo par l'id
        
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->find('AppBundle:Texte', $id);
        $f = $this->createForm(TexteType::class, $annonce);
        if ($request->getMethod() == 'POST'){
            $f->handleRequest($request);
//            $nomDuFichier = md5(uniqid()).".".$annonce->getPhoto()->getClientOriginalExtension();
//            $annonce->getPhoto()->move('uploads/images', $nomDuFichier);
//            $annonce->setPhoto($nomDuFichier);
            $annonce->setClasse('');
            $em->merge($annonce);
            $em->flush();
             return $this->redirect($this->generateUrl('home'));
        }
    }
    
}
