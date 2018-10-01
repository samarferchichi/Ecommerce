<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Categories;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TvaController extends Controller
{
    public function tvaAction()
    {

        $produits=$this->getDoctrine()->getRepository("EcommerceBundle:Produits")->find();

        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig',array('produits'=>$produits));

    }


}

