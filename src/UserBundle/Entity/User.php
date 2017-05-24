<?php

namespace UserBundle\Entity;

use StockBundle\Entity\Product;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * One User has Many Products.
     * @ORM\OneToMany(targetEntity="StockBundle\Entity\Product", mappedBy="user")
     */
    private $product;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}