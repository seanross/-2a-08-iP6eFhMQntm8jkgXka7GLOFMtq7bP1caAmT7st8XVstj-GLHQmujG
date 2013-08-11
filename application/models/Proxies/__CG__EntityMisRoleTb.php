<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MisRoleTb extends \Entity\MisRoleTb implements \Doctrine\ORM\Proxy\Proxy
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

    public function setRole($role)
    {
        $this->__load();
        return parent::setRole($role);
    }

    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }

    public function setDefault($default)
    {
        $this->__load();
        return parent::setDefault($default);
    }

    public function getDefault()
    {
        $this->__load();
        return parent::getDefault();
    }

    public function setMisUserTb(\Entity\MisUserTb $misUserTb)
    {
        $this->__load();
        return parent::setMisUserTb($misUserTb);
    }

    public function getMisUserTb()
    {
        $this->__load();
        return parent::getMisUserTb();
    }

    public function setCreatedBy($createdBy)
    {
        $this->__load();
        return parent::setCreatedBy($createdBy);
    }

    public function getCreatedBy()
    {
        $this->__load();
        return parent::getCreatedBy();
    }

    public function setUpdatedBy($updatedBy)
    {
        $this->__load();
        return parent::setUpdatedBy($updatedBy);
    }

    public function getUpdatedBy()
    {
        $this->__load();
        return parent::getUpdatedBy();
    }

    public function setCreatedDate($createdDate)
    {
        $this->__load();
        return parent::setCreatedDate($createdDate);
    }

    public function getCreatedDate()
    {
        $this->__load();
        return parent::getCreatedDate();
    }

    public function setUpdatedDate($updatedDate)
    {
        $this->__load();
        return parent::setUpdatedDate($updatedDate);
    }

    public function getUpdatedDate()
    {
        $this->__load();
        return parent::getUpdatedDate();
    }

    public function setEnabled($enabled)
    {
        $this->__load();
        return parent::setEnabled($enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'createdBy', 'updatedBy', 'createdDate', 'updatedDate', 'enabled', 'id', 'role', 'default', 'misUserTb');
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