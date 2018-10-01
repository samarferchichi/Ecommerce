<?php
/**
 * Created by PhpStorm.
 * User: samar ferchichi
 * Date: 8/28/2018
 * Time: 3:03 AM
 */
namespace Ecommerce\EcommerceBundle\Services;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContextInterface;


class GetReference
{

    public function __construct( $securityContext,$entityManager )
    {
        $this->securityContext = $securityContext;
        $this->em = $entityManager;
    }


    public function reference()
    {
        $reference = $this->em->getRepository('EcommerceBundle:Commandes')->findOneBy(array('valider'=>1), array('id'=>'DESC'),1,1);
        if (!$reference)
            return 1;
        else return $reference->getReference()+1;
    }
}