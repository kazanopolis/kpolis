<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefHousesPhotos
 *
 * @ORM\Table(name="ref_houses_photos")
 * @ORM\Entity
 */
class RefHousesPhotos
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
     * @var integer $houseId
     *
     * @ORM\Column(name="house_id", type="integer", nullable=false)
     */
    private $houseId;

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
     * @var boolean $flOur
     *
     * @ORM\Column(name="fl_our", type="boolean", nullable=false)
     */
    private $flOur;



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
     * Set houseId
     *
     * @param integer $houseId
     * @return RefHousesPhotos
     */
    public function setHouseId($houseId)
    {
        $this->houseId = $houseId;
    
        return $this;
    }

    /**
     * Get houseId
     *
     * @return integer 
     */
    public function getHouseId()
    {
        return $this->houseId;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return RefHousesPhotos
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
     * @return RefHousesPhotos
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
     * @return RefHousesPhotos
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
     * Set width
     *
     * @param integer $width
     * @return RefHousesPhotos
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
     * @return RefHousesPhotos
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
     * @return RefHousesPhotos
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

    /**
     * Set flOur
     *
     * @param boolean $flOur
     * @return RefHousesPhotos
     */
    public function setFlOur($flOur)
    {
        $this->flOur = $flOur;
    
        return $this;
    }

    /**
     * Get flOur
     *
     * @return boolean 
     */
    public function getFlOur()
    {
        return $this->flOur;
    }
}