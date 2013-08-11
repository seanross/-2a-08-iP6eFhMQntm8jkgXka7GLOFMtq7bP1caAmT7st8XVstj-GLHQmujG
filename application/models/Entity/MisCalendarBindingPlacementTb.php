<?php

namespace Entity;

/**
 * MisCalendarBindingPlacementTb
 *
 * @Table(name="mis_calendar_binding_placement_tb")
 * @Entity
 */
class MisCalendarBindingPlacementTb extends BaseTb {
    /**
     * @var integer
     *
     * @Id
     * @Column(name="id", type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=45, nullable=true)
     */
    protected $name;

    /**
     * @var float
     *
     * @Column(name="virtual_price", type="decimal", scale=100, precision=2, nullable=true)
     */
    protected $virtualPrice;


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
     * @return MisCalendarBindingPlacementTb
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
     * @return MisCalendarBindingPlacementTb
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
