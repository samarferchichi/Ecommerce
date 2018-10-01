<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Tests\Common\DataFixtures\FixtureImplementingBothOrderingInterfaces;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\User\User;

/**
 * @method addReference($string, $media1)
 */
class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $categorie1=new Categories();
        $categorie1->setNom('Legumes');
        $categorie1->setImage($this->getReference('media1'));
        $manager->persist($categorie1);

        $categorie2=new Categories();
        $categorie2->setNom('Fruits');
        $categorie2->setImage($this->getReference('media2'));
        $manager->persist($categorie2);


        $manager->flush();

        $this->addReference('categorie1',$categorie1);
        $this->addReference('categorie2',$categorie2);
    }

    public function getOrder()
    {
        return 2;
    }}