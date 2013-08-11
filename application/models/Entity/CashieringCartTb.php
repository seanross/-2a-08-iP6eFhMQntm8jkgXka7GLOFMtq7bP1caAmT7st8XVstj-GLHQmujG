<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * CashieringCartTb
 *
 * @Table(name="cashiering_cart_tb")
 * @Entity
 */
class CashieringCartTb extends BaseTb{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @OneToOne(targetEntity="MisUserProfileTb", mappedBy="cashieringCartTb")
     */
    private $misUserProfileTb;

     /**
     * @ManyToOne(targetEntity="CashieringPaymentTb")
     * @JoinColumn(name="cashiering_payment_id", referencedColumnName="id")
     */
    private $cashieringPaymentTb;
    
    /**
     * @OneToMany(targetEntity="ProductBrochureTb", mappedBy="cashieringCartTb")
     */
    private $productBrochureTb;
    
    /**
     * @OneToMany(targetEntity="ProductCalendarTb", mappedBy="cashieringCartTb")
     */
    private $productCalendarTb;

    
    
    public function __construct() {
        $this->productBrochureTb = new ArrayCollection;
        $this->productCalendarTb = new ArrayCollection;
    }
        
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
     * Set cashieringPaymentTb
     *
     * @param Entity\CashieringPaymentTb $cashieringPaymentTb
     * @return CashieringCartTb
     */
    public function setCashieringPaymentTb(CashieringPaymentTb $cashieringPaymentTb)
    {
         $this->cashieringPaymentTb = $cashieringPaymentTb;

        // The association must be defined in both directions
        if ( ! $cashieringPaymentTb->getCashieringCartTb()->contains($this))
        {
            $cashieringPaymentTb->addCashieringCartTb($this);
        }
    }

    /**
     * Get cashieringPaymentTb
     *
     * @return CashieringPaymentTb 
     */
    public function getCashieringPaymentTb()
    {
        return $this->cashieringPaymentTb;
    }
    
    /**
     * Add productBrochureTb
     *
     * @param Entity\ProductBrochureTb misBrochureSizeTbs
     * @return CashieringCartTb
     */
    public function addProductBrochureTb(ProductBrochureTb $productBrochureTb)
    {
        $this->productBrochureTb = $productBrochureTb;

        // The association must be defined in both directions
        if ( ! $productBrochureTb->getCashieringCartTb()->contains($this))
        {
            $productBrochureTb->addCashieringCartTb($this);
        }
    }

    /**
     * Get productBrochureTb
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getProductBrochureTb()
    {
        return $this->productBrochureTb;
    }
    
    /**
     * Add productCalendarTb
     *
     * @param ProductCalendarTb $productCalendarTb
     * @return CashieringCartTb
     */
    public function addProductCalendarTb(ProductCalendarTb $productCalendarTb)
    {
        $this->productCalendarTb[] = $productCalendarTb;
        return $this;
    }

    /**
     * Get productCalendarTb
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getProductCalendarTb()
    {
        return $this->productCalendarTb;
    }
    
    /**
     * Set userProfileTb
     *
     * @param UserProfileTb $misUserProfileTb
     * @return MisUserTb
     */
    public function setMisUserProfileTb(MisUserProfileTb $misUserProfileTb)
    {
        $this->misUserProfileTb = $misUserProfileTb;
    
        return $this;
    }

    /**
     * Get userProfileTb
     *
     * @return UserProfileTb
     */
    public function getMisUserProfileTb()
    {
        return $this->misUserProfileTb;
    }
}
