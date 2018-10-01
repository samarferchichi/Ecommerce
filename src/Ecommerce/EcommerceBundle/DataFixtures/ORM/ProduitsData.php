<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Tests\Common\DataFixtures\FixtureImplementingBothOrderingInterfaces;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\User\User;

/**
 * @method addReference($string, $media1)
 */
class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $produit1=new Produits();
        $produit1->setCategories($this->getReference('categorie1'));
        $produit1->setDescription("aaaaaaaa");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media1'));
        $produit1->setNom('Poivron rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva2'));

        $manager->persist($produit1);



        $produit2=new Produits();
        $produit2->setCategories($this->getReference('categorie2'));
        $produit2->setDescription("bbbbbbbb");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media2'));
        $produit2->setNom('banana');
        $produit2->setPrix('1.99');
        $produit2->setTva($this->getReference('tva1'));

        $manager->persist($produit2);




        $manager->flush();

        $this->addReference('produit1',$produit1);
        $this->addReference('produit2',$produit2);
    }

    public function getOrder()
    {
        return 4;
    }


}