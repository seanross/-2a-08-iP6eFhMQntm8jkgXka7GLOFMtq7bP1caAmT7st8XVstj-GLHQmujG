<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * MisUserProfile
 *
 * @Table(name="user_profiles")
 * @Entity
 */
class MisUserProfileTb extends BaseTb {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

     /**
     * @OneToOne(targetEntity="MisUserTb")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $misUserTb;

    /**
     * @var string
     *
     * @Column(name="country", type="string", length=20, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @Column(name="middlename", type="string", length=255, nullable=true)
     */
    private $middlename;


    /**
     * @var string
     *
     * @Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;


    /**
     * @var string
     *
     * @Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var boolean
     *
     * @Column(name="gender", type="boolean", nullable=false)
     */
    private $gender;

    /**
     * @var \DateTime
     *
     * @Column(name="bdate", type="date", nullable=true)
     */
    private $bdate;

    /**
     * @var string
     *
     * @Column(name="address", type="text", nullable=false)
     */
    private $address;

    /**
     * @OneToOne(targetEntity="MisImageTb")
     * @JoinColumn(name="mis_image_id", referencedColumnName="id")
     */
    private $misImageTb;

    /**
     * @OnetoOne(targetEntity="CashieringCartTb")
     * @JoinColumn(name="cashiering_cart_id", referencedColumnName="id")
     */
    protected $cashieringCartTb;

    /**
     * @OneToMany(targetEntity="ForumPostTb", mappedBy="userProfileTb")
     */
    protected $forumPostTb;

     /**
     * Initialize any collection properties as ArrayCollections
     *
     * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#initializing-collections
     *
     */
    public function __construct()
    {
        $this->forumPostTb = new ArrayCollection;
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
     * Set $misUserTb
     *
     * @param Users $misUserTb
     * @return MisUserProfile
     */
    public function setMisUserTb(MisUserTb $misUserTb)
    {
        $this->misUserTb = $misUserTb;
        return $this;
    }

    /**
     * Get $misUserTb
     *
     * @return Users 
     */
    public function getMisUserTb()
    {
        return $this->misUserTb;
    }

    /**
     * Get firstname
     *
     * @return firstname 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set country
     *
     * @param string $firstname
     * @return UserProfiles
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

     /**
     * Get middlename
     *
     * @return middlename 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     * @return UserProfiles
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    
        return $this;
    }

     /**
     * Get lastname
     *
     * @return lastname 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return UserProfiles
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return UserProfiles
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return UserProfiles
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return UserProfiles
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set bdate
     *
     * @param \DateTime $bdate
     * @return UserProfiles
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;
    
        return $this;
    }

    /**
     * Get bdate
     *
     * @return \DateTime 
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return UserProfiles
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set misImageTb
     *
     * @param MisImageTb $misImageTb
     * @return UserProfiles
     */
    public function setMisImageTb(MisImageTb $misImageTb)
    {
        $this->misImageTb = $misImageTb;
        return $this;
    }

    /**
     * Get misImageTb
     *
     * @return misImageTb 
     */
    public function getMisImageTb()
    {
        return $this->misImageTb;
    }

    /**
     * Add cashieringCartTb
     *
     * @param CashieringCartTb $cashieringCartTb
     * @return UserProfiles
     */
    public function setCashieringCartTb(CashieringCartTb $cashieringCartTb)
    {
        $this->cashieringCartTb = $cashieringCartTb;
        return $this;
    }

    /**
     * Get CashieringCartTb
     *
     * @return CasheringCartTb
     */
    public function getCashieringCartTb()
    {
        return $this->cashieringCartTb;
    }

    /**
     * Add forumPostTb
     *
     * @param ForumPostTb $forumPostTb
     * @return UserProfiles
     */
    public function addForumPostTb(ForumPostTb $forumPostTb)
    {
        $this->forumPostTb[] = $forumPostTb;
        return $this;
    }

    /**
     * Get forumPostTb
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getForumPostTb()
    {
        return $this->forumPostTb;
    }
}
