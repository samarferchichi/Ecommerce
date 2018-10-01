<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Tests\Common\DataFixtures\FixtureImplementingBothOrderingInterfaces;
use Ecommerce\EcommerceBundle\Entity\Tva;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\User\User;

/**
 * @method addReference($string, $media1)
 */
class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $tva1=new Tva();
        $tva1->setMultiplicate('0.983');
        $tva1->setNom('Tva 1.75%');
        $tva1->setValeur('1.75');

        $manager->persist($tva1);

        $tva2=new Tva();
        $tva2->setMultiplicate('0.800');
        $tva2->setNom('Tva 20%');
        $tva2->setValeur('20');

        $manager->persist($tva2);

        $manager->flush();

        $this->addReference('tva1',$tva1);
        $this->addReference('tva2',$tva2);

    }

    public function getOrder()
    {
        return 3;
    }}