<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CashieringCartTb extends \Entity\CashieringCartTb implements \Doctrine\ORM\Proxy\Proxy
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

    public function setCashieringPaymentTb(\Entity\CashieringPaymentTb $cashieringPaymentTb)
    {
        $this->__load();
        return parent::setCashieringPaymentTb($cashieringPaymentTb);
    }

    public function getCashieringPaymentTb()
    {
        $this->__load();
        return parent::getCashieringPaymentTb();
    }

    public function addProductBrochureTb(\Entity\ProductBrochureTb $productBrochureTb)
    {
        $this->__load();
        return parent::addProductBrochureTb($productBrochureTb);
    }

    public function getProductBrochureTb()
    {
        $this->__load();
        return parent::getProductBrochureTb();
    }

    public function addProductCalendarTb(\Entity\ProductCalendarTb $productCalendarTb)
    {
        $this->__load();
        return parent::addProductCalendarTb($productCalendarTb);
    }

    public function getProductCalendarTb()
    {
        $this->__load();
        return parent::getProductCalendarTb();
    }

    public function setMisUserProfileTb(\Entity\MisUserProfileTb $misUserProfileTb)
    {
        $this->__load();
        return parent::setMisUserProfileTb($misUserProfileTb);
    }

    public function getMisUserProfileTb()
    {
        $this->__load();
        return parent::getMisUserProfileTb();
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
        return array('__isInitialized__', 'createdBy', 'updatedBy', 'createdDate', 'updatedDate', 'enabled', 'id', 'misUserProfileTb', 'cashieringPaymentTb', 'productBrochureTb', 'productCalendarTb');
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