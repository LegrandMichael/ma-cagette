<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CatalogueController extends Controller
{

    /**
     * @Route("Catalogue")
     */
    public function CatalogueAfficherAction()
    {

        $em = $this->getDoctrine()->getManager();
        // $products = $em->getRepository('AppBundle:Product')->getTriCategory();
        $products = $em->getRepository('AppBundle:Product')->findBy(array(),array("proName" => "ASC"));

        
        return $this->render('AppBundle:Catalogue:catalogue_afficher.html.twig', array(
            'products' => $products,
        ));

    }

}
