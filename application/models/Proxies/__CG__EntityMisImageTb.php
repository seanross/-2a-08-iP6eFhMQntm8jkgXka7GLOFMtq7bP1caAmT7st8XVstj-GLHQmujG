<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MisImageTb extends \Entity\MisImageTb implements \Doctrine\ORM\Proxy\Proxy
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

    public function setFileName($fileName)
    {
        $this->__load();
        return parent::setFileName($fileName);
    }

    public function getFileName()
    {
        $this->__load();
        return parent::getFileName();
    }

    public function setFileType($fileType)
    {
        $this->__load();
        return parent::setFileType($fileType);
    }

    public function getFileType()
    {
        $this->__load();
        return parent::getFileType();
    }

    public function setFilePath($filePath)
    {
        $this->__load();
        return parent::setFilePath($filePath);
    }

    public function getFilePath()
    {
        $this->__load();
        return parent::getFilePath();
    }

    public function setFullPath($fullPath)
    {
        $this->__load();
        return parent::setFullPath($fullPath);
    }

    public function getFullPath()
    {
        $this->__load();
        return parent::getFullPath();
    }

    public function setFileUrl($fileUrl)
    {
        $this->__load();
        return parent::setFileUrl($fileUrl);
    }

    public function getFileUrl()
    {
        $this->__load();
        return parent::getFileUrl();
    }

    public function setThumbUrl($thumbUrl)
    {
        $this->__load();
        return parent::setThumbUrl($thumbUrl);
    }

    public function getThumbUrl()
    {
        $this->__load();
        return parent::getThumbUrl();
    }

    public function setRawName($rawName)
    {
        $this->__load();
        return parent::setRawName($rawName);
    }

    public function getRawName()
    {
        $this->__load();
        return parent::getRawName();
    }

    public function setOrigName($origName)
    {
        $this->__load();
        return parent::setOrigName($origName);
    }

    public function getOrigName()
    {
        $this->__load();
        return parent::getOrigName();
    }

    public function setClientName($clientName)
    {
        $this->__load();
        return parent::setClientName($clientName);
    }

    public function getClientName()
    {
        $this->__load();
        return parent::getClientName();
    }

    public function setFileExt($fileExt)
    {
        $this->__load();
        return parent::setFileExt($fileExt);
    }

    public function getFileExt()
    {
        $this->__load();
        return parent::getFileExt();
    }

    public function setFileSize($fileSize)
    {
        $this->__load();
        return parent::setFileSize($fileSize);
    }

    public function getFileSize()
    {
        $this->__load();
        return parent::getFileSize();
    }

    public function setIsImage($isImage)
    {
        $this->__load();
        return parent::setIsImage($isImage);
    }

    public function getIsImage()
    {
        $this->__load();
        return parent::getIsImage();
    }

    public function setImageWidth($imageWidth)
    {
        $this->__load();
        return parent::setImageWidth($imageWidth);
    }

    public function getImageWidth()
    {
        $this->__load();
        return parent::getImageWidth();
    }

    public function setImageHeight($imageHeight)
    {
        $this->__load();
        return parent::setImageHeight($imageHeight);
    }

    public function getImageHeight()
    {
        $this->__load();
        return parent::getImageHeight();
    }

    public function setImageType($imageType)
    {
        $this->__load();
        return parent::setImageType($imageType);
    }

    public function getImageType()
    {
        $this->__load();
        return parent::getImageType();
    }

    public function setImageSizeStr($imageSizeStr)
    {
        $this->__load();
        return parent::setImageSizeStr($imageSizeStr);
    }

    public function getImageSizeStr()
    {
        $this->__load();
        return parent::getImageSizeStr();
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
        return array('__isInitialized__', 'createdBy', 'updatedBy', 'createdDate', 'updatedDate', 'enabled', 'id', 'fileName', 'fileType', 'filePath', 'fullPath', 'fileUrl', 'thumbUrl', 'rawName', 'origName', 'clientName', 'fileExt', 'fileSize', 'isImage', 'imageWidth', 'imageHeight', 'imageType', 'imageSizeStr');
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