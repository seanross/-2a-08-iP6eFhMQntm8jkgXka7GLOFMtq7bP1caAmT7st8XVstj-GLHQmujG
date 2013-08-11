<?php

namespace Entity;

/**
 * MisCalendarCoverTb
 *
 * @Table(name="mis_calendar_cover_tb")
 * @Entity
 */
class MisCalendarCoverTb extends BaseTb {
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
     * @Column(name="virtual_price", type="decimal", scale=100, precision=2, nullable=true)
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
     * @return MisCalendarCoverTb
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
     * @return MisCalendarCoverTb
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
