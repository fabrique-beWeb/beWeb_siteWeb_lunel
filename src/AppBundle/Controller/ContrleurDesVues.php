<?php
 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContrleurDesVues extends Controller {
    
    /**
     * @Route("/promo",name = "promo")
     * @Template("default/promo.html.twig")
     */
    function viewPromo (){
        
    }
    
}
