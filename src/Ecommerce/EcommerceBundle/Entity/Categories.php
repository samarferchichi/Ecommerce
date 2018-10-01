<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categories
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Media $image
     *
     * @return Categories
     */
    public function setImage(\Ecommerce\EcommerceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }
    public function __toString() {
        return (string)$this->nom;
    }

}
