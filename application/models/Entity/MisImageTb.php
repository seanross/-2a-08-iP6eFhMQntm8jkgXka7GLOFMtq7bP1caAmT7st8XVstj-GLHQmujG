<?php

namespace Entity;

/**
 * picture Entity
 *
 * @Table(name="mis_image_tb")
 * @Entity
 */
class MisImageTb extends BaseTb{
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
     * @Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @Column(name="file_type", type="string", length=50, nullable=true)
     */
    private $fileType;

    /**
     * @var string
     *
     * @Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var string
     *
     * @Column(name="full_path", type="string", length=255, nullable=true)
     */
    private $fullPath;

    /**
     * @var string
     *
     * @Column(name="file_url", type="string", length=255, nullable=true)
     */
    private $fileUrl;

    /**
     * @var string
     *
     * @Column(name="thumb_url", type="string", length=255, nullable=true)
     */
    private $thumbUrl;

    /**
     * @var string
     *
     * @Column(name="raw_name", type="string", length=255, nullable=true)
     */
    private $rawName;

    /**
     * @var string
     *
     * @Column(name="orig_name", type="string", length=255, nullable=true)
     */
    private $origName;

    /**
     * @var string
     *
     * @Column(name="client_name", type="string", length=255, nullable=true)
     */
    private $clientName;

    /**
     * @var string
     *f
     * @Column(name="file_ext", type="string", length=50, nullable=true)
     */
    private $fileExt;

    /**
     * @var float
     *
     * @Column(name="file_size", type="decimal", nullable=true)
     */
    private $fileSize;

    /**
     * @var boolean
     *
     * @Column(name="is_image", type="boolean", nullable=true)
     */
    private $isImage;

    /**
     * @var integer
     *
     * @Column(name="image_width", type="integer", nullable=true)
     */
    private $imageWidth;

    /**
     * @var integer
     *
     * @Column(name="image_height", type="integer", nullable=true)
     */
    private $imageHeight;

    /**
     * @var string
     *
     * @Column(name="image_type", type="string", length=255, nullable=true)
     */
    private $imageType;

    /**
     * @var string
     *
     * @Column(name="image_size_str", type="text", nullable=true)
     */
    private $imageSizeStr;

    


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
     * Set fileName
     *
     * @param string $fileName
     * @return Picture
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    
        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set fileType
     *
     * @param string $fileType
     * @return Picture
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    
        return $this;
    }

    /**
     * Get fileType
     *
     * @return string 
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return Picture
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
    
        return $this;
    }

    /**
     * Get filePath
     *
     * @return string 
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set fullPath
     *
     * @param string $fullPath
     * @return Picture
     */
    public function setFullPath($fullPath)
    {
        $this->fullPath = $fullPath;
    
        return $this;
    }

    /**
     * Get fullPath
     *
     * @return string 
     */
    public function getFullPath()
    {
        return $this->fullPath;
    }

    /**
     * Set fileUrl
     *
     * @param string $thumbsUrl
     * @return Picture
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
    
        return $this;
    }

    /**
     * Get fileUrl
     *
     * @return string 
     */
    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    /**
     * Set thumbUrl
     *
     * @param string $thumbUrl
     * @return Picture
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->thumbUrl = $thumbUrl;
    
        return $this;
    }

    /**
     * Get thumbUrl
     *
     * @return string 
     */
    public function getThumbUrl()
    {
        return $this->thumbUrl;
    }

    /**
     * Set rawName
     *
     * @param string $rawName
     * @return Picture
     */
    public function setRawName($rawName)
    {
        $this->rawName = $rawName;
    
        return $this;
    }

    /**
     * Get rawName
     *
     * @return string 
     */
    public function getRawName()
    {
        return $this->rawName;
    }

    /**
     * Set origName
     *
     * @param string $origName
     * @return Picture
     */
    public function setOrigName($origName)
    {
        $this->origName = $origName;
    
        return $this;
    }

    /**
     * Get origName
     *
     * @return string 
     */
    public function getOrigName()
    {
        return $this->origName;
    }

    /**
     * Set clientName
     *
     * @param string $clientName
     * @return Picture
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    
        return $this;
    }

    /**
     * Get clientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set fileExt
     *
     * @param string $fileExt
     * @return Picture
     */
    public function setFileExt($fileExt)
    {
        $this->fileExt = $fileExt;
    
        return $this;
    }

    /**
     * Get fileExt
     *
     * @return string 
     */
    public function getFileExt()
    {
        return $this->fileExt;
    }

    /**
     * Set fileSize
     *
     * @param float $fileSize
     * @return Picture
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    
        return $this;
    }

    /**
     * Get fileSize
     *
     * @return float 
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Set isImage
     *
     * @param boolean $isImage
     * @return Picture
     */
    public function setIsImage($isImage)
    {
        $this->isImage = $isImage;
    
        return $this;
    }

    /**
     * Get isImage
     *
     * @return boolean 
     */
    public function getIsImage()
    {
        return $this->isImage;
    }

    /**
     * Set imageWidth
     *
     * @param integer $imageWidth
     * @return Picture
     */
    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;
    
        return $this;
    }

    /**
     * Get imageWidth
     *
     * @return integer 
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Set imageHeight
     *
     * @param integer $imageHeight
     * @return Picture
     */
    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;
    
        return $this;
    }

    /**
     * Get imageHeight
     *
     * @return integer 
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Set imageType
     *
     * @param string $imageType
     * @return Picture
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
    
        return $this;
    }

    /**
     * Get imageType
     *
     * @return string 
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Set imageSizeStr
     *
     * @param string $imageSizeStr
     * @return Picture
     */
    public function setImageSizeStr($imageSizeStr)
    {
        $this->imageSizeStr = $imageSizeStr;
    
        return $this;
    }

    /**
     * Get imageSizeStr
     *
     * @return string 
     */
    public function getImageSizeStr()
    {
        return $this->imageSizeStr;
    }

}
