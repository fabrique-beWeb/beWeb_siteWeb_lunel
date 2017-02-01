<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Entity\Statut;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends Controller {

    /**
     * /////// Envois candidature 
     * @Route("/candidatureValid ", name="valideCandidat")
     * 
     */
    public function candidatEnvois(Request $request) {
        $em = $this->getDoctrine()->getManager();
//        recup la requet jason 
        $mail = $request->get('mail');
        $nlBlooen = $request->get('newsletter');
//        Recup la liste de mail correspondent au mail recup  
        $listeuser = $this->getDoctrine()->getRepository(User::class)->findByMail($mail);
        // Si cette liste exsiste ( alors le mail existe ) 
        if (count($listeuser) > 0) {
            //  Alors je cible cette utilsateur 
            $Inscreption2 = $listeuser[0];
            // met a jours cette entity
            $em->merge($Inscreption2);
            // Si cette liste exsiste pas ( alors mail nouveaux ) 
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

        $reponseJson = new JsonResponse();
        return $reponseJson;
    }

    /**
     * /////// Envois Contacte 
     * @Route("/contacteValid", name="valideContacte")
     */
    public function contacteEnvois(Request $request) {
//        $emUser = $this->getDoctrine()->getManager();
//        recup la requet jason 
        $mailConta = $request->get('mailConta');
        /////Creation de l'User 
        $this->checkUser($mailConta);
        /////Creation de l'entity message (Svg message)
        $this->saveMail($request);
        /////Creation et envoi de mail 
        $this->sendMail($request);

        return new JsonResponse();
    }
    
    /**
     * @param Request $request
     */
    private function saveMail(Request $request) {
        
        $mailConta = $request->get('mailConta');
        $objConta = $request->get('objConta');
        $messConta = $request->get('messConta');
        
        $emMessage = $this->getDoctrine()->getManager();

        $initMessage = new Message();

        $initMessage->setMail($mailConta);
        $initMessage->setObjet($objConta);
        $initMessage->setMessage($messConta);
        $initMessage->setSujet("Contact");
        $initMessage->setStatut($emMessage->find(Statut::class, 0));


        $emMessage->persist($initMessage);

        $emMessage->flush();

        
    }


    private function checkUser(String $mailConta) {
        $emUser = $this->getDoctrine()->getManager();
        $listeuser = $this->getDoctrine()->getRepository(User::class)->findByMail($mailConta);
        // Si cette liste exsiste ( alors le mail existe ) 
        if (count($listeuser) > 0) {
            //  Alors je cible cette utilsateur 
            $initUser = $listeuser[0];
            // met a jours cette entity
            $emUser->merge($initUser);
            // Si cette liste exsiste pas ( alors mail nouveaux ) 
        } else {
            $initUser = new User();
            $initUser->setMail($mailConta);
            $emUser->persist($initUser);
        }
        $initUser->setNewsletter(1);
        $initUser->setCandidat(0);

        $emUser->flush();
    }

    /**
     * 
     * @param Request $r
     */
    private function sendMail(Request $r) {
        $mailConta = $r->get('mailConta');
        $objConta = $r->get('objConta');
        $messConta = $r->get('messConta');
        $message = Swift_Message::newInstance()
                ->setFrom($mailConta)
                ->setTo('leboloc@gmail.com')
                ->setSubject("De  " . $mailConta . " : " . $objConta)
                ->setBody($messConta);

        $this->get('mailer')->send($message);

        $messageConfirm = Swift_Message::newInstance()
                ->setFrom('leboloc@gmail.com')
                ->setTo($mailConta)
                ->setSubject("Comfirmation envoi mail")
                ->setBody("Bonjours nous vous confirmons l'envoie de votre mail");

        $this->get('mailer')->send($messageConfirm);
    }
}
