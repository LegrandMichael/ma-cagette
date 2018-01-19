<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SubCategory
 *
 * @ORM\Table(name="sub_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubCategoryRepository")
 */
class SubCategory
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
     * @ORM\Column(name="subName", type="string", length=255, unique=true)
     */
    private $subName;

    /**
     * @ORM\ManyToOne(targetEntity="Category" ,inversedBy="subCategories")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="id")
     */
    private $category;

    /**
     * 
     * @ORM\OneToMany(targetEntity="Product", mappedBy="subCategory")
     */
    private $products;
    // ...

    public function __construct() {
        $this->products = new ArrayCollection();
    }





    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subName
     *
     * @param string $subName
     *
     * @return SubCategory
     */
    public function setSubName($subName)
    {
        $this->subName = $subName;

        return $this;
    }

    /**
     * Get subName
     *
     * @return string
     */
    public function getSubName()
    {
        return $this->subName;
    }

    /**
     * Get subCategory.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

