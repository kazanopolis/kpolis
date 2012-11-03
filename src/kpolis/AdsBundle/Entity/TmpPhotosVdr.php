<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\TmpPhotosVdr
 *
 * @ORM\Table(name="tmp_photos_vdr")
 * @ORM\Entity
 */
class TmpPhotosVdr
{
    /**
     * @var integer $tmpPhotoId
     *
     * @ORM\Column(name="tmp_photo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmpPhotoId;

    /**
     * @var string $tmpFilePath
     *
     * @ORM\Column(name="tmp_file_path", type="string", length=255, nullable=true)
     */
    private $tmpFilePath;

    /**
     * @var integer $tmpStreetId
     *
     * @ORM\Column(name="tmp_street_id", type="integer", nullable=false)
     */
    private $tmpStreetId;

    /**
     * @var string $tmpHouseNumber
     *
     * @ORM\Column(name="tmp_house_number", type="string", length=10, nullable=true)
     */
    private $tmpHouseNumber;

    /**
     * @var string $tmpSourceUrl
     *
     * @ORM\Column(name="tmp_source_url", type="string", length=255, nullable=true)
     */
    private $tmpSourceUrl;

    /**
     * @var string $tmpPhotoDescr
     *
     * @ORM\Column(name="tmp_photo_descr", type="string", length=255, nullable=true)
     */
    private $tmpPhotoDescr;

    /**
     * @var integer $tmpMakeYear
     *
     * @ORM\Column(name="tmp_make_year", type="smallint", nullable=false)
     */
    private $tmpMakeYear;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var integer $tmpPhotoSize
     *
     * @ORM\Column(name="tmp_photo_size", type="integer", nullable=false)
     */
    private $tmpPhotoSize;



    /**
     * Get tmpPhotoId
     *
     * @return integer 
     */
    public function getTmpPhotoId()
    {
        return $this->tmpPhotoId;
    }

    /**
     * Set tmpFilePath
     *
     * @param string $tmpFilePath
     * @return TmpPhotosVdr
     */
    public function setTmpFilePath($tmpFilePath)
    {
        $this->tmpFilePath = $tmpFilePath;
    
        return $this;
    }

    /**
     * Get tmpFilePath
     *
     * @return string 
     */
    public function getTmpFilePath()
    {
        return $this->tmpFilePath;
    }

    /**
     * Set tmpStreetId
     *
     * @param integer $tmpStreetId
     * @return TmpPhotosVdr
     */
    public function setTmpStreetId($tmpStreetId)
    {
        $this->tmpStreetId = $tmpStreetId;
    
        return $this;
    }

    /**
     * Get tmpStreetId
     *
     * @return integer 
     */
    public function getTmpStreetId()
    {
        return $this->tmpStreetId;
    }

    /**
     * Set tmpHouseNumber
     *
     * @param string $tmpHouseNumber
     * @return TmpPhotosVdr
     */
    public function setTmpHouseNumber($tmpHouseNumber)
    {
        $this->tmpHouseNumber = $tmpHouseNumber;
    
        return $this;
    }

    /**
     * Get tmpHouseNumber
     *
     * @return string 
     */
    public function getTmpHouseNumber()
    {
        return $this->tmpHouseNumber;
    }

    /**
     * Set tmpSourceUrl
     *
     * @param string $tmpSourceUrl
     * @return TmpPhotosVdr
     */
    public function setTmpSourceUrl($tmpSourceUrl)
    {
        $this->tmpSourceUrl = $tmpSourceUrl;
    
        return $this;
    }

    /**
     * Get tmpSourceUrl
     *
     * @return string 
     */
    public function getTmpSourceUrl()
    {
        return $this->tmpSourceUrl;
    }

    /**
     * Set tmpPhotoDescr
     *
     * @param string $tmpPhotoDescr
     * @return TmpPhotosVdr
     */
    public function setTmpPhotoDescr($tmpPhotoDescr)
    {
        $this->tmpPhotoDescr = $tmpPhotoDescr;
    
        return $this;
    }

    /**
     * Get tmpPhotoDescr
     *
     * @return string 
     */
    public function getTmpPhotoDescr()
    {
        return $this->tmpPhotoDescr;
    }

    /**
     * Set tmpMakeYear
     *
     * @param integer $tmpMakeYear
     * @return TmpPhotosVdr
     */
    public function setTmpMakeYear($tmpMakeYear)
    {
        $this->tmpMakeYear = $tmpMakeYear;
    
        return $this;
    }

    /**
     * Get tmpMakeYear
     *
     * @return integer 
     */
    public function getTmpMakeYear()
    {
        return $this->tmpMakeYear;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return TmpPhotosVdr
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
     * Set tmpPhotoSize
     *
     * @param integer $tmpPhotoSize
     * @return TmpPhotosVdr
     */
    public function setTmpPhotoSize($tmpPhotoSize)
    {
        $this->tmpPhotoSize = $tmpPhotoSize;
    
        return $this;
    }

    /**
     * Get tmpPhotoSize
     *
     * @return integer 
     */
    public function getTmpPhotoSize()
    {
        return $this->tmpPhotoSize;
    }
}