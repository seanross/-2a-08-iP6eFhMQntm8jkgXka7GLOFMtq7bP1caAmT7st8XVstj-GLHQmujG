<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * CashieringPaymentTb
 *
 * @Table(name="cashiering_payment_tb")
 * @Entity
 */
class CashieringPaymentTb extends BaseTb{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="balance", type="string", length=45, nullable=true)
     */
    private $balance;

    /**
     * @var \DateTime
     *
     * @Column(name="payment_date", type="datetime", nullable=true)
     */
    private $paymentDate;

    /**
     * @OneToMany(targetEntity="CashieringCartTb", mappedBy="cashieringPaymentTb")
     */
    private $cashieringCartTb;
    
    
    public function __construct() {
        $this->cashieringCartTb = new ArrayCollection;
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
     * Set balance
     *
     * @param string $balance
     * @return CashieringPaymentTb
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return string 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return CashieringPaymentTb
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    
        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }
    
     /**
     * Add cashieringCartTb
     *
     * @param CashieringCartTb cashieringCartTb
     * @return CashieringPaymentTb
     */
    public function addCashieringCartTb(CashieringCartTb $cashieringCartTb)
    {
        $this->cashieringCartTb[] = $cashieringCartTb;
        return $this;
    }

    /**
     * Get cashieringCartTb
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCashieringCartTb()
    {
        return $this->cashieringCartTb;
    }
}
