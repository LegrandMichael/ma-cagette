<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CartController extends Controller
{

    /**
     * @Route("/showCart")
     */
    public function showCartAction(Request $request)
    {

        
        $session = $request->getSession();
        
        if ( $session->has('compteur'))
        {
            $session->set('compteur', $session->get('compteur')+1);
            
        }else{
            
            $session->set('compteur',0);
            
        }

        return $this->render('AppBundle:Cart:show_cart.html.twig', array(
            'compteur'=>$session->get('compteur'),
        ));
    }

    /**
     * @Route("/purchaseCart")
     */
    public function purchaseCartAction()
    {
        return $this->render('AppBundle:Cart:purchase_cart.html.twig', array(
        ));
         
    }

}
