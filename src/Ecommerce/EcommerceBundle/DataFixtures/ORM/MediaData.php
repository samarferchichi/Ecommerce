<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Tests\Common\DataFixtures\FixtureImplementingBothOrderingInterfaces;
use Ecommerce\EcommerceBundle\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\User\User;

/**
 * @method addReference($string, $media1)
 */
class MediaData extends AbstractFixture implements OrderedFixtureInterface
    {
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $media1=new Media();
        $media1->setPath('https://www.google.tn/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjt05ys3vPcAhWRqaQKHYw-DYYQjRx6BAgBEAU&url=https%3A%2F%2Fwww.openask.com%2Ffr%2Ftests%2F3290-quel-est-votre-legume-totem&psig=AOvVaw2CgCno60QWzKzSvwwCWOk7&ust=1534583278072853');
        $media1->setAlt('Legumes');
        $manager->persist($media1);

        $media2=new Media();
        $media2->setPath('https://www.google.tn/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiX9aqD3_PcAhWS66QKHf4dA8cQjRx6BAgBEAU&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Ffruit%2F&psig=AOvVaw0Zp2ECiQYdC7sGHpbXeOyt&ust=1534583461079002');
        $media2->setAlt('Feruits');
        $manager->persist($media2);


        $manager->flush();

        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
    }

    public function getOrder()
    {
        return 1;
    }}