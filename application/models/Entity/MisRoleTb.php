<?php

namespace Entity;

/**
 * MisRoleTb
 *
 * @Table(name="roles")
 * @Entity
 */
class MisRoleTb extends BaseTb{
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
     * @Column(name="role", type="string", length=255, nullable=false)
     */
    private $role;

    /**
     * @var boolean
     *
     * @Column(name="default", type="boolean", nullable=false)
     */
    private $default;

     /**
     * @OneToOne(targetEntity="MisUserTb", mappedBy="misRoleTb")
     */
     private $misUserTb;


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
     * Set role
     *
     * @param string $role
     * @return Roles
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set default
     *
     * @param boolean $default
     * @return Roles
     */
    public function setDefault($default)
    {
        $this->default = $default;
    
        return $this;
    }

    /**
     * Get default
     *
     * @return boolean 
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set misUserTb
     *
     * @param Users misUserTb
     * @return Users
     */
    public function setMisUserTb(MisUserTb $misUserTb)
    {
        $this->misUserTb = $misUserTb;
    
        return $this;
    }

    /**
     * Get misUserTb
     *
     * @return Users 
     */
    public function getMisUserTb()
    {
        return $this->misUserTb;
    }
}
