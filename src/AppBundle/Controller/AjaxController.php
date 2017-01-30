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
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller {

    /**
     * /////// Envois candidature 
     * @Route("/candidatureValid ", name="valideCandidat")
     * 
     */
    public function candidatEnvois(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $mail = $request->get('mail');
        $nlBlooen = $request->get('newsletter');
        $listeuser = $this->getDoctrine()->getRepository(User::class)->findByMail($mail);
        if (count($listeuser) > 0) {
            $Inscreption2 = $listeuser[0];
            $em->merge($Inscreption2);
        } else {

            $Inscreption2 = new User();
            $Inscreption2->setMail($mail);
            $em->persist($Inscreption2);
        }

        $Inscreption2->setNewsletter($nlBlooen);
        $Inscreption2->setCandidat(1);

        // on sauvegarde en local
        // et on envoi en base de donnee
        $em->flush();

        return new Response();
    }

}
