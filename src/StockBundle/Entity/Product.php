<?php

namespace StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Product
 * @ORM\Entity
 * @Vich\Uploadable
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="StockBundle\Repository\ProductRepository")
 */
class Product {

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity="StockBundle\Entity\Category", cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="product")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * @return int 
     */
    private $user;

    public function setImageFile(File $image = null) {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile() {
        return $this->imageFile;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Product
     */
    public function setUser(\UserBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \StockBundle\Entity\Category $category
     *
     * @return Product
     */
    public function addCategory(\StockBundle\Entity\Category $category) {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \StockBundle\Entity\Category $category
     */
    public function removeCategory(\StockBundle\Entity\Category $category) {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories() {
        return $this->categories;
    }

}
