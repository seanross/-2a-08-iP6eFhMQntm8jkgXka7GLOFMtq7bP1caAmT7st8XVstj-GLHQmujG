<?php

namespace Entity;

/**
 * ProductBrochureTb
 *
 * @Table(name="product_brochure_tb")
 * @Entity
 */
class ProductBrochureTb extends BaseTb{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

     /**
     * @ManyToOne(targetEntity="CashieringCartTb")
     * @JoinColumn(name="cashiering_cart_id", referencedColumnName="id")
     */
    private $cashieringCartTb;

    /**
     * @OnetoOne(targetEntity="MisBrochureSizeTb")
     * @JoinColumn(name="mis_brochure_size_id", referencedColumnName="id")
     */
    private $misBrochureSizeTb;

    /**
     * @OnetoOne(targetEntity="MisBrochurePaperTypeTb")
     * @JoinColumn(name="mis_brochure_paper_type_id", referencedColumnName="id")
     */
    private $misBrochurePaperTypeTb;

    /**
     * @OnetoOne(targetEntity="MisBrochureFoldingTb")
     * @JoinColumn(name="mis_brochure_folding_id", referencedColumnName="id")
     */
    private $misBrochureFoldingTb;

    /**
     * @OnetoOne(targetEntity="MisBrochurePrintedSideTb")
     * @JoinColumn(name="mis_brochure_printed_side_id", referencedColumnName="id")
     */
    private $misBrochurePrintedSideTb;

    /**
     * @var integer
     *
     * @Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

     /**
     * @OneToOne(targetEntity="MisImageTb")
     * @JoinColumn(name="mis_image_id", referencedColumnName="id")
     */
    private $misImageTb;
    /**
     * @var float
     *
     * @Column(name="price", type="decimal", nullable=true)
     */
    private $price;


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
     * Set cashieringCartTb
     *
     * @param CashieringCartTb $cashieringCartTb
     * @return ProductBrochureTb
     */
    public function setCashieringCartTb(Entity\CashieringCartTb $cashieringCartTb)
    {
         $this->cashieringCartTb = $cashieringCartTb;

        // The association must be defined in both directions
        if ( ! $cashieringCartTb->getProductBrochureTb()->contains($this))
        {
            $cashieringCartTb->addProductBrochureTb($this);
        }
    }

    /**
     * Get cashieringCartTb
     *
     * @return CashieringCartTb 
     */
    public function getCashieringCartTb()
    {
        return $this->cashieringCartTb;
    }

    /**
     * Add misBrochureSizeTb
     *
     * @param Entity\MisBrochureSizeTb $misBrochureSizeTb
     * @return ProductBrochureTb
     */
    public function setMisBrochureSizeTb(Entity\MisBrochureSizeTb $misBrochureSizeTb)
    {
        $this->misBrochureSizeTb = $misBrochureSizeTb;
        return $this;
    }

    /**
     * Get MisBrochureSizeTb
     *
     * @return MisBrochureSizeTb 
     */
    public function getMisBrochureSizeTb()
    {
        return $this->misBrochureSizeTb;
    }

    /**
     * Set misBrochurePaperTypeTb
     *
     * @param MisBrochurePaperTypeTb $misBrochurePaperTypeTb
     * @return ProductBrochureTb
     */
    public function setMisBrochurePaperTypeTb(Entity\MisBrochurePaperTypeTb $misBrochurePaperTypeTb)
    {
        $this->misBrochurePaperTypeTb = $misBrochurePaperTypeTb;
        return $this;
    }

    /**
     * Get misBrochurePaperTypeTb
     *
     * @return MisBrochurePaperTypeTb 
     */
    public function getMisBrochurePaperTypeTb()
    {
        return $this->misBrochurePaperTypeTb;
    }

    /**
     * Set misBrochureFoldingTb
     *
     * @param MisBrochureFoldingTb $misBrochureFoldingTb
     * @return ProductBrochureTb
     */
    public function setMisBrochureFoldingTb(Entity\MisBrochureFoldingTb $misBrochureFoldingTb)
    {
        $this->misBrochureFoldingTb = $misBrochureFoldingTb;
        return $this;
    }

    /**
     * Get misBrochureFoldingTb
     *
     * @return MisBrochureFoldingTb 
     */
    public function getMisBrochureFoldingTb()
    {
        return $this->misBrochureFoldingTb;
    }

    /**
     * Set misBrochurePrintedSideTb
     *
     * @param MisBrochurePrintedSideTb $misBrochurePrintedSideTb
     * @return ProductBrochureTb
     */
    public function setMisBrochurePrintedSideTb(Entity\MisBrochurePrintedSideTb $misBrochurePrintedSideTb)
    {
        $this->misBrochurePrintedSideTb = $misBrochurePrintedSideTb;
        return $this;
    }

    /**
     * Get misBrochurePrintedSideTb
     *
     * @return MisBrochurePrintedSideTb 
     */
    public function getMisBrochurePrintedSideTb()
    {
        return $this->misBrochurePrintedSideTb;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ProductBrochureTb
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
     * Set price
     *
     * @param float $price
     * @return ProductBrochureTb
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }
    
     /**
     * Get MisImageTb
     *
     * @return MisImageTb 
     */
    public function getMisImageTb(){
        return $this->misImageTb;
    }
    
    /**
     * Set MisImageTb
     *
     * @param Entity\MisImageTb $misImageTb
     * @return misImageTb
     */
    public function setMisImageTb(Entity\MisImageTb $misImageTb){
        $this->misImageTb = $misImageTb;
    }
    
}