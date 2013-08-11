<?php

namespace Entity;

/**
 * Transaction
 *
 * @Table(name="transaction")
 * @Entity
 */
class Transaction extends BaseEntity {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * 
     *@OnetoOne(targetEntity="Product")
     *@JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @var integer
     *
     * @Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var float
     *
     * @Column(name="subtotal", type="decimal", nullable=false)
     */
    private $subtotal;

    /**
     * @ManyToOne(targetEntity="UserProfiles")
     * @JoinColumn(name="userprofile_id", referencedColumnName="id")
     */
    private $userProfile;

    /**
     * @var boolean
     *
     * @Column(name="is_cart", type="boolean", nullable=true)
     */
    private $isCart;


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
     * Set product
     *
     * @param Product $product
     * @return Transaction
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Transaction
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     * @return Transaction
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    
        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set userProfile
     *
     * @param UserProfiles $userProfile
     * @return Transaction
     */
    public function setUserProfile(UserProfiles $userProfile)
    {
        $this->userProfile = $userProfile;
    
        return $this;
    }

    /**
     * Get userProfile
     *
     * @return integer 
     */
    public function getUserProfile()
    {
        return $this->userProfile;
    }

    /**
     * Set isCart
     *
     * @param boolean $isCart
     * @return Trasaction
     */
    public function setIsCart($isCart)
    {
        $this->isCart = $isCart;
    
        return $this;
    }

    /**
     * Get isCart
     *
     * @return boolean 
     */
    public function getIsCart()
    {
        return $this->isCart;
    }

}
