<?php

namespace Entity;

/**
 * Base Entity
 *
 * @MappedSuperclass
 *
 * @author  Sean Ross Fortunato
 */
class BaseTb {

     /**
     * @var string
     *
     * @Column(name="created_by", type="string", length=45, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @Column(name="updated_by", type="string", length=45, nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @Column(name="updated_date", type="datetime", nullable=true)
     */
    private $updatedDate;

    /**
     * @var boolean
     *
     * @Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled;


    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return BaseEntity
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return BaseEntity
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    
        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return BaseEntity
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     * @return BaseEntity
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;
    
        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime 
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return BaseEntity
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

}