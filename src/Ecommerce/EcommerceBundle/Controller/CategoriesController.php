<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Categories;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {

        $produit=$this->getDoctrine()->getRepository("EcommerceBundle:Categories")->findAll();

        return $this->render('EcommerceBundle:Default:categories/layout/menu.html.twig',array('categories'=>$produit));

    }

    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig');
    }

}

