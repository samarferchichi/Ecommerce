<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Categories;
use Ecommerce\EcommerceBundle\Entity\Produits;

use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ProduitsController extends Controller
{



    public function produitsAction(Categories $categorie = null)
    {

        $session = $this->getRequest()->getSession();

        $em=$this->getDoctrine()->getManager();

        if($categorie != null)
        {
            $produits= $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);

        }
        else $produits= $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible'=>1));


        if ($session->has('panier'))
            $panier=$session->get('panier');
        else $panier = false;

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array('produits'=>$produits,
                                                                                                        'panier'=>$panier));
    }


    public function presentationAction($id)
    {        $session = $this->getRequest()->getSession();

        $em=$this->getDoctrine()->getManager();
        $produit= $em->getRepository('EcommerceBundle:Produits')->find($id);
        if ($session->has('panier'))
            $panier=$session->get('panier');
        else $panier = false;

        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',array('produit'=>$produit,
                                                                                                            'panier'=>$panier));
    }

    public function rechercheAction()
    {
        $form=$this->createForm((new RechercheType()));
        return $this->render('EcommerceBundle:Default:recherche/layout/recherche.html.twig',array('form'=>$form->createView()));

    }


    public function rechercheTraitementAction()
    {

        $form=$this->createForm((new RechercheType()));

        if ($this->get('request')->getMethod() == 'POST') {
            $form->bind($this->getRequest());
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());

        }
        else{
           throw $this->createNotFoundException('la page nexiste pas');
        }
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array('produits'=>$produits));

    }


    public function categorieAction()
    {

        return $this->render('EcommerceBundle:Default:categories/layout/categorie.html.twig');

    }

}

