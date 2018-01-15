<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("Contact")
     */
    public function ContactAfficherAction()
    {
        return $this->render('AppBundle:Accueil:contact_afficher.html.twig', array(
            // ...
        ));
    }

}
