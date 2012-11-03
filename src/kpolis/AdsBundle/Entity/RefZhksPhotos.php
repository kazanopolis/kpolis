<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefZhksPhotos
 *
 * @ORM\Table(name="ref_zhks_photos")
 * @ORM\Entity
 */
class RefZhksPhotos
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
     * @var integer $zhkId
     *
     * @ORM\Column(name="zhk_id", type="integer", nullable=false)
     */
    private $zhkId;

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
     * @var string $photoDescription
     *
     * @ORM\Column(name="photo_description", type="string", length=255, nullable=true)
     */
    private $photoDescription;



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
     * Set zhkId
     *
     * @param integer $zhkId
     * @return RefZhksPhotos
     */
    public function setZhkId($zhkId)
    {
        $this->zhkId = $zhkId;
    
        return $this;
    }

    /**
     * Get zhkId
     *
     * @return integer 
     */
    public function getZhkId()
    {
        return $this->zhkId;
    }

    /**
     * Set filePath
     *
     * @param string $filePath
     * @return RefZhksPhotos
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
     * @return RefZhksPhotos
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
     * @return RefZhksPhotos
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
     * @return RefZhksPhotos
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
     * Set photoDescription
     *
     * @param string $photoDescription
     * @return RefZhksPhotos
     */
    public function setPhotoDescription($photoDescription)
    {
        $this->photoDescription = $photoDescription;
    
        return $this;
    }

    /**
     * Get photoDescription
     *
     * @return string 
     */
    public function getPhotoDescription()
    {
        return $this->photoDescription;
    }
}