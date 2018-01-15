<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CatalogueController extends Controller
{
    /**
     * @Route("Catalogue")
     */
    public function CatalogueAfficherAction()
    {
        return $this->render('AppBundle:Catalogue:catalogue_afficher.html.twig', array(
            // ...
        ));
    }

}
