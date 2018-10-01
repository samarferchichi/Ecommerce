<?php
/**
 * Created by PhpStorm.
 * User: samar ferchichi
 * Date: 8/25/2018
 * Time: 10:41 AM
 */

namespace Ecommerce\EcommerceBundle\Twig\Extension;


class MontantTvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('montantTva',array($this,'montantTva')));
    }

    function montantTva($prixHT,$tva)
    {
        // lazem *
        return round(($prixHT * $tva),2);
    }

    public function getName()
    {
        return 'montant_tva_extension';
    }
}