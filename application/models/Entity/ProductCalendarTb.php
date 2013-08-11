<?php

namespace Entity;

/**
 * ProductCalendarTb
 *
 * @Table(name="product_calendar_tb")
 * @Entity
 */
class ProductCalendarTb extends BaseTb
{
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
     * @Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="instruction", type="string", length=255, nullable=true)
     */
    private $instruction;
    
    /**
     * @ManyToOne(targetEntity="CashieringCartTb")
     * @JoinColumn(name="cashiering_cart_id", referencedColumnName="id")
     */
    private $cashieringCartTb;

     /**
     * @OnetoOne(targetEntity="MisCalendarPageSizeTb")
     * @JoinColumn(name="mis_calendar_page_size_id", referencedColumnName="id")
     */
    private $misCalendarPageSizeTb;

    /**
     * @OnetoOne(targetEntity="MisCalendarPaperInsidePagesTb")
     * @JoinColumn(name="mis_calendar_paper_inside_pages_id", referencedColumnName="id")
     */
    private $misCalendarPaperInsidePagesTb;

    /**
     * @OnetoOne(targetEntity="MisCalendarCoverPaperTb")
     * @JoinColumn(name="mis_calendar_cover_paper_id", referencedColumnName="id")
     */
    private $misCalendarCoverPaperTb;
    
    /**
     * @OnetoOne(targetEntity="MisCalendarCoverTb")
     * @JoinColumn(name="mis_calendar_cover_id", referencedColumnName="id")
     */
    private $misCalendarCoverTb;

    /**
     * @OnetoOne(targetEntity="MisCalendarPagesTb")
     * @JoinColumn(name="mis_calendar_pages_id", referencedColumnName="id")
     */
    private $misCalendarPagesTb;

     /**
     * @OnetoOne(targetEntity="MisCalendarBindingTb")
     * @JoinColumn(name="mis_calendar_binding_id", referencedColumnName="id")
     */
    private $misCalendarBindingTb;

    /**
     * @OnetoOne(targetEntity="MisCalendarBindingPlacementTb")
     * @JoinColumn(name="mis_calendar_binding_placement_id", referencedColumnName="id")
     */
    private $misCalendarBindingPlacementTb;

    /**
     * @OnetoOne(targetEntity="MisCalendarHoleDrillingTb")
     * @JoinColumn(name="mis_calendar_hole_drilling_id", referencedColumnName="id")
     */
    private $misCalendarHoleDrillingTb;
    
    /**
     * @var integer
     *
     * @Column(name="turn_around", type="integer", nullable=false)
     */
    private $turnAround;

    /**
     * @var integer
     *
     * @Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @Column(name="price", type="decimal", nullable=true)
     */
    private $price;
    
     /**
     * @OneToOne(targetEntity="MisImageTb")
     * @JoinColumn(name="mis_image_id", referencedColumnName="id")
     */
    private $misImageTb;


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
     * @return ProductCalendarTb
     */
    public function setCashieringCartTb(CashieringCartTb $cashieringCartTb)
    {
         $this->cashieringCartTb = $cashieringCartTb;

        // The association must be defined in both directions
        if ( ! $cashieringCartTb->getProductCalendarTb()->contains($this))
        {
            $cashieringCartTb->addProductCalendarTb($this);
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
     * Set misCalendarTypeTb
     *
     * @param MisCalendarTypeTb $misCalendarTypeTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarTypeTb(MisCalendarTypeTb $misCalendarTypeTb)
    {
        $this->misCalendarTypeTb = $misCalendarTypeTb;
        return $this;
    }

    /**
     * Get misCalendarTypeTb
     *
     * @return MisCalendarTypeTb
     */
    public function getMisCalendarTypeTb()
    {
        return $this->misCalendarTypeTb;
    }

    /**
     * Set misCalendarPageSizeTb
     *
     * @param MisCalendarPageSizeTb $misCalendarPageSizeTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarPageSizeTb(MisCalendarPageSizeTb $misCalendarPageSizeTb)
    {
        $this->misCalendarPageSizeTb = $misCalendarPageSizeTb;
    
        return $this;
    }

    /**
     * Get misCalendarPageSizeTb
     *
     * @return MisCalendarPageSizeTb
     */
    public function getMisCalendarPageSizeTb()
    {
        return $this->misCalendarPageSizeTb;
    }

    /**
     * Set misCalendarPaperInsidePagesTb
     *
     * @param MisCalendarPaperInsidePagesTb $misCalendarPaperInsidePagesTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarPaperInsidePagesTb(MisCalendarPaperInsidePagesTb $misCalendarPaperInsidePagesTb)
    {
        $this->misCalendarPaperInsidePagesTb = $misCalendarPaperInsidePagesTb;
    
        return $this;
    }

    /**
     * Get misCalendarPaperInsidePagesTb
     *
     * @return MisCalendarPaperInsidePagesTb
     */
    public function getMisCalendarPaperInsidePagesTb()
    {
        return $this->misCalendarPaperInsidePagesTb;
    }

    /**
     * Set misCalendarCoverPaperTb
     *
     * @param MisCalendarCoverPaperTb $misCalendarCoverPaperTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarCoverPaperTb(MisCalendarCoverPaperTb $misCalendarCoverPaperTb)
    {
        $this->misCalendarCoverPaperTb = $misCalendarCoverPaperTb;
    
        return $this;
    }

    /**
     * Get misCalendarCoverPaperTb
     *
     * @return MisCalendarCoverPaperTb
     */  
    public function getMisCalendarCoverPaperTb()
    {
        return $this->misCalendarCoverPaperTb;
    }
    
    /**
     * Set misCalendarCoverTb
     *
     * @param MisCalendarCoverTb $misCalendarCoverTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarCoverTb(MisCalendarCoverTb $misCalendarCoverTb)
    {
        $this->misCalendarCoverTb = $misCalendarCoverTb;
    
        return $this;
    }

    /**
     * Get misCalendarCoverTb
     *
     * @return MisCalendarCoverTb
     */
    public function getMisCalendarCoverTb()
    {
        return $this->misCalendarCoverTb;
    }

    /**
     * Set misCalendarPagesTb
     *
     * @param MisCalendarPagesTb $misCalendarPagesTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarPagesTb(MisCalendarPagesTb $misCalendarPagesTb)
    {
        $this->misCalendarPagesTb = $misCalendarPagesTb;
        return $this;
    }

    /**
     * Get misCalendarPagesTb
     *
     * @return MisCalendarPagesTb 
     */
    public function getMisCalendarPagesTb()
    {
        return $this->misCalendarPagesTb;
    }

    /**
     * Set misCalendarBindingTb
     *
     * @param MisCalendarBindingTb $misCalendarBindingTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarBindingTb(MisCalendarBindingTb $misCalendarBindingTb)
    {
        $this->misCalendarBindingTb = $misCalendarBindingTb;
    
        return $this;
    }

    /**
     * Get misCalendarBindingTb
     *
     * @return MisCalendarBindingTb 
     */
    public function getMisCalendarBindingTb()
    {
        return $this->misCalendarBindingTb;
    }

    /**
     * Set misCalendarBindingPlacementTb
     *
     * @param MisCalendarBindingPlacementTb $misCalendarBindingPlacementTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarBindingPlacementTb(MisCalendarBindingPlacementTb $misCalendarBindingPlacementTb)
    {
        $this->misCalendarBindingPlacementTb = $misCalendarBindingPlacementTb;
        return $this;
    }

    /**
     * Get misCalendarBindingPlacementTb
     *
     * @return MisCalendarBindingPlacementTb
     */
    public function getMisCalendarBindingPlacementTb()
    {
        return $this->misCalendarBindingPlacementTb;
    }

    /**
     * Set misCalendarHoleDrillingTb
     *
     * @param MisCalendarHoleDrillingTb $misCalendarHoleDrillingTb
     * @return ProductCalendarTb
     */
    public function setMisCalendarHoleDrillingTb(MisCalendarHoleDrillingTb $misCalendarHoleDrillingTb)
    {
        $this->misCalendarHoleDrillingTb = $misCalendarHoleDrillingTb;
    
        return $this;
    }

    /**
     * Get misCalendarHoleDrillingTb
     *
     * @return integer 
     */
    public function getMisCalendarHoleDrillingTb()
    {
        return $this->misCalendarHoleDrillingTb;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ProductCalendarTb
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
     * @return ProductCalendarTb
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
     * @param MisImageTb $misImageTb
     * @return misImageTb
     */
    public function setMisImageTb(MisImageTb $misImageTb){
        $this->misImageTb = $misImageTb;
    }
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string name
     * @return ProductCalendarTb
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * Get instruction
     *
     * @return string 
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Set instruction
     *
     * @param string instruction
     * @return ProductCalendarTb
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;
    
        return $this;
    }
    
    /**
     * Get turnAround
     *
     * @return integer 
     */
    public function getTurnAround()
    {
        return $this->turnAround;
    }

    /**
     * Set turnAround
     *
     * @param integer turnAround
     * @return ProductCalendarTb
     */
    public function setTurnAround($turnAround)
    {
        $this->turnAround = $turnAround;
    
        return $this;
    }
}
