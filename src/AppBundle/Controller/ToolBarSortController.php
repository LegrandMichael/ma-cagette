<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToolBarSortController extends Controller
{

    
    public function SortAction()
    {

        $em = $this->getDoctrine()->getManager();
        // $products = $em->getRepository('AppBundle:Product')->getTriCategory();
        $products = $em->getRepository('AppBundle:Product')->findBy(array(),array("proName" => "ASC"));
        $categories = $em->getRepository('AppBundle:Category')->findBy(array(),array("catName" => "ASC"));

        return $this->render('AppBundle:ToolBarSort:sort.html.twig', array(
            'products' => $products,
            'categories' => $categories,
        ));
    }

}
