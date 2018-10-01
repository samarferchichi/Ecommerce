<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EcommerceBundle:Commandes')->byFacture($this->getUser());


        return $this->render('UtilisateursBundle:Default:layout/factures.html.twig',array('factures'=>$factures));
    }

    public function logadminAction()
    {
        return $this->render('C:\xampp\htdocs\Ecommerce\app\Resources\FOSUserBundle\views\Security\logadmin.html.twig');
    }
}
