<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of ControleurCRUD
 *
 * @author vivien
 */
class ControleurCRUD extends Controller{
    
    ///////CRUD Textes
    
     public function showText(){ //Afiche Texte
         
        $em = $this->getDoctrine();
        $texts = $em->getRepository("AppBundle:Text")->findAll();
        return array ('texts'=> $texts);
     }
    
}
