<?php

namespace Entity;

/**
 * MisBrochurePrintedSideTb
 *
 * @Table(name="mis_brochure_printed_side_tb")
 * @Entity
 */
class MisBrochurePrintedSideTb extends BaseTb{
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
     * @Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @Column(name="virtual_price", type="decimal", nullable=true)
     */
    private $virtualPrice;

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
     * Set name
     *
     * @param string $name
     * @return MisPrintedSideTb
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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
     * Set virtualPrice
     *
     * @param float $virtualPrice
     * @return MisPrintedSideTb
     */
    public function setVirtualPrice($virtualPrice)
    {
        $this->virtualPrice = $virtualPrice;
    
        return $this;
    }

    /**
     * Get virtualPrice
     *
     * @return float 
     */
    public function getVirtualPrice()
    {
        return $this->virtualPrice;
    }

}
