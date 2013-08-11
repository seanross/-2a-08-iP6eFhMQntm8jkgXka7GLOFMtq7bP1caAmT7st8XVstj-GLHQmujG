<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserAutologin
 *
 * @ORM\Table(name="user_autologin")
 * @ORM\Entity
 */
class UserAutologin
{
    /**
     * @var string
     *
     * @ORM\Column(name="key_id", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $keyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=150, nullable=false)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip", type="string", length=40, nullable=false)
     */
    private $lastIp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;


    /**
     * Set keyId
     *
     * @param string $keyId
     * @return UserAutologin
     */
    public function setKeyId($keyId)
    {
        $this->keyId = $keyId;
    
        return $this;
    }

    /**
     * Get keyId
     *
     * @return string 
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return UserAutologin
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     * @return UserAutologin
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    
        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     * @return UserAutologin
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
     * @return UserAutologin
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
}
