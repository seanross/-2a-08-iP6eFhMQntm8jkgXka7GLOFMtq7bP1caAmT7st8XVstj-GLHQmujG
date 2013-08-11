<?php

namespace Entity;

/**
 * MisUserTb
 *
 * @Table(name="users")
 * @Entity
 */
class MisUserTb {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @OneToOne(targetEntity="MisUserProfileTb")
     * @JoinColumn(name="userprofile_id", referencedColumnName="id")
     */
    private $misUserProfileTb;

    /**
     * @var string
     *
     * @Column(name="username", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @OneToOne(targetEntity="MisRoleTb")
     * @JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $misRoleTb;
    
    /**
     * @var boolean
     *
     * @Column(name="activated", type="boolean", nullable=false)
     */
    private $activated;

    /**
     * @var boolean
     *
     * @Column(name="banned", type="boolean", nullable=false)
     */
    private $banned;

    /**
     * @var string
     *
     * @Column(name="ban_reason", type="string", length=255, nullable=true)
     */
    private $banReason;

    /**
     * @var string
     *
     * @Column(name="new_password_key", type="string", length=50, nullable=true)
     */
    private $newPasswordKey;

    /**
     * @var \DateTime
     *
     * @Column(name="new_password_requested", type="datetime", nullable=true)
     */
    private $newPasswordRequested;

    /**
     * @var string
     *
     * @Column(name="new_email", type="string", length=100, nullable=true)
     */
    private $newEmail;

    /**
     * @var string
     *
     * @Column(name="new_email_key", type="string", length=50, nullable=true)
     */
    private $newEmailKey;

    /**
     * @var string
     *
     * @Column(name="last_ip", type="string", length=40, nullable=false)
     */
    private $lastIp;

    /**
     * @var \DateTime
     *
     * @Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;

    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

     
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
     * Set username
     *
     * @param string $username
     * @return MisUserTb
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MisUserTb
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return MisUserTb
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set role
     *
     * @param Roles $role
     * @return Role
     */
    public function setMisRoleTb(MisRoleTb $misRoleTb)
    {
        $this->misRoleTb = $misRoleTb;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return Role 
     */
    public function getMisRoleTb()
    {
        return $this->misRoleTb;
    }
    /**
     * Set activated
     *
     * @param boolean $activated
     * @return MisUserTb
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
    
        return $this;
    }

    /**
     * Get activated
     *
     * @return boolean 
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     * @return MisUserTb
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;
    
        return $this;
    }

    /**
     * Get banned
     *
     * @return boolean 
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set banReason
     *
     * @param string $banReason
     * @return MisUserTb
     */
    public function setBanReason($banReason)
    {
        $this->banReason = $banReason;
    
        return $this;
    }

    /**
     * Get banReason
     *
     * @return string 
     */
    public function getBanReason()
    {
        return $this->banReason;
    }

    /**
     * Set newPasswordKey
     *
     * @param string $newPasswordKey
     * @return MisUserTb
     */
    public function setNewPasswordKey($newPasswordKey)
    {
        $this->newPasswordKey = $newPasswordKey;
    
        return $this;
    }

    /**
     * Get newPasswordKey
     *
     * @return string 
     */
    public function getNewPasswordKey()
    {
        return $this->newPasswordKey;
    }

    /**
     * Set newPasswordRequested
     *
     * @param \DateTime $newPasswordRequested
     * @return MisUserTb
     */
    public function setNewPasswordRequested($newPasswordRequested)
    {
        $this->newPasswordRequested = $newPasswordRequested;
    
        return $this;
    }

    /**
     * Get newPasswordRequested
     *
     * @return \DateTime 
     */
    public function getNewPasswordRequested()
    {
        return $this->newPasswordRequested;
    }

    /**
     * Set newEmail
     *
     * @param string $newEmail
     * @return MisUserTb
     */
    public function setNewEmail($newEmail)
    {
        $this->newEmail = $newEmail;
    
        return $this;
    }

    /**
     * Get newEmail
     *
     * @return string 
     */
    public function getNewEmail()
    {
        return $this->newEmail;
    }

    /**
     * Set newEmailKey
     *
     * @param string $newEmailKey
     * @return MisUserTb
     */
    public function setNewEmailKey($newEmailKey)
    {
        $this->newEmailKey = $newEmailKey;
    
        return $this;
    }

    /**
     * Get newEmailKey
     *
     * @return string 
     */
    public function getNewEmailKey()
    {
        return $this->newEmailKey;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     * @return MisUserTb
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;
    
        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string 
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return MisUserTb
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return MisUserTb
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return MisUserTb
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
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
