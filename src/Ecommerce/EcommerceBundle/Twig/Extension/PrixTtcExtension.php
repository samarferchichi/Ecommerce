<?php
/**
 * Created by PhpStorm.
 * User: samar ferchichi
 * Date: 8/25/2018
 * Time: 10:41 AM
 */

namespace Ecommerce\EcommerceBundle\Twig\Extension;


class PrixTtcExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('prixTtc',array($this,'prixTtc')));
    }

    function prixTtc($prixHT,$tva)
    {
        return round(($prixHT * $tva),2);
    }

    public function getName()
    {
        return 'prix_ttc_extension';
    }
}