<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_name", type="string", length=255)
     */
    private $proName;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_description", type="string", length=255)
     */
    private $proDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_price", type="string", length=255)
     */
    private $proPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_img", type="string", length=255)
     */
    private $proImg;

    /**
     * @ORM\ManyToOne(targetEntity="SubCategory" ,inversedBy="products")
     * @ORM\JoinColumn(name="sub_cat_id", referencedColumnName="id")
     */
    private $subCategory;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proName.
     *
     * @param string $proName
     *
     * @return Product
     */
    public function setProName($proName)
    {
        $this->proName = $proName;

        return $this;
    }

    /**
     * Get proName.
     *
     * @return string
     */
    public function getProName()
    {
        return $this->proName;
    }

    /**
     * Set proDescription.
     *
     * @param string $proDescription
     *
     * @return Product
     */
    public function setProDescription($proDescription)
    {
        $this->proDescription = $proDescription;

        return $this;
    }

    /**
     * Get proDescription.
     *
     * @return string
     */
    public function getProDescription()
    {
        return $this->proDescription;
    }

    /**
     * Set proPrice.
     *
     * @param string $proPrice
     *
     * @return Product
     */
    public function setProPrice($proPrice)
    {
        $this->proPrice = $proPrice;

        return $this;
    }

    /**
     * Get proPrice.
     *
     * @return string
     */
    public function getProPrice()
    {
        return $this->proPrice;
    }

    /**
     * Set proImg.
     *
     * @param string $proImg
     *
     * @return Product
     */
    public function setProImg($proImg)
    {
        $this->proImg = $proImg;

        return $this;
    }

    /**
     * Get proImg.
     *
     * @return string
     */
    public function getProImg()
    {
        return $this->proImg;
    }



    /**
     * Get subCategory.
     *
     * @return string
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }
}
