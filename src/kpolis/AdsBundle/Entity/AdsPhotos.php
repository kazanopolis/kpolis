<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AdsPhotos
 *
 * @ORM\Table(name="ads_photos")
 * @ORM\Entity
 */
class AdsPhotos
{
    /**
     * @var integer $photoId
     *
     * @ORM\Column(name="photo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $photoId;

    /**
     * @var integer $adId
     *
     * @ORM\Column(name="ad_id", type="integer", nullable=false)
     */
    private $adId;

    /**
     * @var string $filePath
     *
     * @ORM\Column(name="file_path", type="string", length=255, nullable=true)
     */
    private $filePath;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false)
     */
    private $createDate;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var boolean $photoType
     *
     * @ORM\Column(name="photo_type", type="boolean", nullable=false)
     */
    private $photoType;

    /**
     * @var boolean $flBad
     *
     * @ORM\Column(name="fl_bad", type="boolean", nullable=false)
     */
    private $flBad;

    /**
     * @var integer $width
     *
     * @ORM\Column(name="width", type="smallint", nullable=false)
     */
    private $width;

    /**
     * @var integer $height
     *
     * @ORM\Column(name="height", type="smallint", nullable=false)
     */
    private $height;

    /**
     * @var integer $size
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size;



    /**
     * Get photoId
     *
     * @return integer 
     */
    public function getPhotoId()
    {
        return $this->photoId;
    }

    /**
     * Set adId
     *
     * @param integer $adId
     * @return AdsPhotos
     */
    public function setAdId($adId)
    {
        $this->adId = $adId;
    
        return $this;
    }

    /**
     * Get adId
     *
     * @return integer 
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return AdsPhotos
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
     * Set createDate
     *
     * @param integer $createDate
     * @return AdsPhotos
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return integer 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return AdsPhotos
     */
    public function setFlStatus($flStatus)
    {
        $this->flStatus = $flStatus;
    
        return $this;
    }

    /**
     * Get flStatus
     *
     * @return boolean 
     */
    public function getFlStatus()
    {
        return $this->flStatus;
    }

    /**
     * Set photoType
     *
     * @param boolean $photoType
     * @return AdsPhotos
     */
    public function setPhotoType($photoType)
    {
        $this->photoType = $photoType;
    
        return $this;
    }

    /**
     * Get photoType
     *
     * @return boolean 
     */
    public function getPhotoType()
    {
        return $this->photoType;
    }

    /**
     * Set flBad
     *
     * @param boolean $flBad
     * @return AdsPhotos
     */
    public function setFlBad($flBad)
    {
        $this->flBad = $flBad;
    
        return $this;
    }

    /**
     * Get flBad
     *
     * @return boolean 
     */
    public function getFlBad()
    {
        return $this->flBad;
    }

    /**
     * Set width
     *
     * @param integer $width
     * @return AdsPhotos
     */
    public function setWidth($width)
    {
        $this->width = $width;
    
        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return AdsPhotos
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return AdsPhotos
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }
}