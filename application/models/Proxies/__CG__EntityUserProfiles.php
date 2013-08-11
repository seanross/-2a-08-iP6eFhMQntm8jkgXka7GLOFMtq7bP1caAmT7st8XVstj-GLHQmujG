<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class UserProfiles extends \Entity\UserProfiles implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUser(\Entity\Users $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getMiddlename()
    {
        $this->__load();
        return parent::getMiddlename();
    }

    public function setMiddlename($middlename)
    {
        $this->__load();
        return parent::setMiddlename($middlename);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function setWebsite($website)
    {
        $this->__load();
        return parent::setWebsite($website);
    }

    public function getWebsite()
    {
        $this->__load();
        return parent::getWebsite();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setBdate($bdate)
    {
        $this->__load();
        return parent::setBdate($bdate);
    }

    public function getBdate()
    {
        $this->__load();
        return parent::getBdate();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setPicture($picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function addTransaction(\Entity\Transaction $transaction)
    {
        $this->__load();
        return parent::addTransaction($transaction);
    }

    public function getTransactions()
    {
        $this->__load();
        return parent::getTransactions();
    }

    public function addPost(\Entity\Post $post)
    {
        $this->__load();
        return parent::addPost($post);
    }

    public function getPosts()
    {
        $this->__load();
        return parent::getPosts();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'country', 'firstname', 'middlename', 'lastname', 'website', 'gender', 'bdate', 'address', 'user', 'picture', 'transactions', 'posts');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}