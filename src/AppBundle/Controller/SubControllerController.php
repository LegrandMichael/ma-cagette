<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * @Route("/category")
 */
class SubControllerController extends Controller
{
    /**
     * @Route("/{CategoryFind}")
     */
    public function showProductByCategoryAction($CategoryFind)
    {

        $em=$this->getDoctrine()->getManager();
        $Category=$em->getRepository("AppBundle:Category")->findOneByCatName($CategoryFind);
        return $this->render('AppBundle:SubController:show_product.html.twig', array(
            "Category"=> $Category,
        ));
    }

    /**
     * @Route("/subCategory/{subCategoryFind}")
     */
    public function showProductBySubCategoryAction($subCategoryFind)
    {

        $em=$this->getDoctrine()->getManager();
        $subCategory=$em->getRepository("AppBundle:SubCategory")->findOneBySubName($subCategoryFind);
        
        return $this->render('AppBundle:SubController:show_product.html.twig', array(
            "subCategory"=> $subCategory,
        ));
    }

}
