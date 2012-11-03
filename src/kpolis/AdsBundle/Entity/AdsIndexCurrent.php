<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AdsIndexCurrent
 *
 * @ORM\Table(name="ads_index_current")
 * @ORM\Entity
 */
class AdsIndexCurrent
{
    /**
     * @var integer $adId
     *
     * @ORM\Column(name="ad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adId;

    /**
     * @var integer $merchantId
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false)
     */
    private $merchantId;

    /**
     * @var boolean $adType
     *
     * @ORM\Column(name="ad_type", type="boolean", nullable=true)
     */
    private $adType;

    /**
     * @var integer $adPrice
     *
     * @ORM\Column(name="ad_price", type="integer", nullable=true)
     */
    private $adPrice;

    /**
     * @var boolean $adPhotos
     *
     * @ORM\Column(name="ad_photos", type="boolean", nullable=false)
     */
    private $adPhotos;

    /**
     * @var boolean $districtId
     *
     * @ORM\Column(name="district_id", type="boolean", nullable=false)
     */
    private $districtId;

    /**
     * @var boolean $zhkId
     *
     * @ORM\Column(name="zhk_id", type="boolean", nullable=false)
     */
    private $zhkId;

    /**
     * @var integer $streetId
     *
     * @ORM\Column(name="street_id", type="smallint", nullable=false)
     */
    private $streetId;

    /**
     * @var integer $houseId
     *
     * @ORM\Column(name="house_id", type="integer", nullable=true)
     */
    private $houseId;

    /**
     * @var integer $adPublishDate
     *
     * @ORM\Column(name="ad_publish_date", type="integer", nullable=true)
     */
    private $adPublishDate;

    /**
     * @var boolean $flatRooms
     *
     * @ORM\Column(name="flat_rooms", type="boolean", nullable=false)
     */
    private $flatRooms;

    /**
     * @var boolean $flatFloor
     *
     * @ORM\Column(name="flat_floor", type="boolean", nullable=false)
     */
    private $flatFloor;

    /**
     * @var float $flatSquareAll
     *
     * @ORM\Column(name="flat_square_all", type="float", nullable=true)
     */
    private $flatSquareAll;

    /**
     * @var float $flatSquareLive
     *
     * @ORM\Column(name="flat_square_live", type="float", nullable=true)
     */
    private $flatSquareLive;

    /**
     * @var float $flatSquareKitchen
     *
     * @ORM\Column(name="flat_square_kitchen", type="float", nullable=true)
     */
    private $flatSquareKitchen;

    /**
     * @var boolean $houseFloors
     *
     * @ORM\Column(name="house_floors", type="boolean", nullable=false)
     */
    private $houseFloors;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var boolean $adStatus
     *
     * @ORM\Column(name="ad_status", type="boolean", nullable=false)
     */
    private $adStatus;

    /**
     * @var boolean $flNew
     *
     * @ORM\Column(name="fl_new", type="boolean", nullable=false)
     */
    private $flNew;

    /**
     * @var boolean $flLastFloor
     *
     * @ORM\Column(name="fl_last_floor", type="boolean", nullable=false)
     */
    private $flLastFloor;

    /**
     * @var string $contactsPhones
     *
     * @ORM\Column(name="contacts_phones", type="string", length=50, nullable=true)
     */
    private $contactsPhones;

    /**
     * @var boolean $sourceId
     *
     * @ORM\Column(name="source_id", type="boolean", nullable=false)
     */
    private $sourceId;

    /**
     * @var boolean $flQualityControl
     *
     * @ORM\Column(name="fl_quality_control", type="boolean", nullable=false)
     */
    private $flQualityControl;



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
     * Set merchantId
     *
     * @param integer $merchantId
     * @return AdsIndexCurrent
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    
        return $this;
    }

    /**
     * Get merchantId
     *
     * @return integer 
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set adType
     *
     * @param boolean $adType
     * @return AdsIndexCurrent
     */
    public function setAdType($adType)
    {
        $this->adType = $adType;
    
        return $this;
    }

    /**
     * Get adType
     *
     * @return boolean 
     */
    public function getAdType()
    {
        return $this->adType;
    }

    /**
     * Set adPrice
     *
     * @param integer $adPrice
     * @return AdsIndexCurrent
     */
    public function setAdPrice($adPrice)
    {
        $this->adPrice = $adPrice;
    
        return $this;
    }

    /**
     * Get adPrice
     *
     * @return integer 
     */
    public function getAdPrice()
    {
        return $this->adPrice;
    }

    /**
     * Set adPhotos
     *
     * @param boolean $adPhotos
     * @return AdsIndexCurrent
     */
    public function setAdPhotos($adPhotos)
    {
        $this->adPhotos = $adPhotos;
    
        return $this;
    }

    /**
     * Get adPhotos
     *
     * @return boolean 
     */
    public function getAdPhotos()
    {
        return $this->adPhotos;
    }

    /**
     * Set districtId
     *
     * @param boolean $districtId
     * @return AdsIndexCurrent
     */
    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;
    
        return $this;
    }

    /**
     * Get districtId
     *
     * @return boolean 
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Set zhkId
     *
     * @param boolean $zhkId
     * @return AdsIndexCurrent
     */
    public function setZhkId($zhkId)
    {
        $this->zhkId = $zhkId;
    
        return $this;
    }

    /**
     * Get zhkId
     *
     * @return boolean 
     */
    public function getZhkId()
    {
        return $this->zhkId;
    }

    /**
     * Set streetId
     *
     * @param integer $streetId
     * @return AdsIndexCurrent
     */
    public function setStreetId($streetId)
    {
        $this->streetId = $streetId;
    
        return $this;
    }

    /**
     * Get streetId
     *
     * @return integer 
     */
    public function getStreetId()
    {
        return $this->streetId;
    }

    /**
     * Set houseId
     *
     * @param integer $houseId
     * @return AdsIndexCurrent
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
     * Set adPublishDate
     *
     * @param integer $adPublishDate
     * @return AdsIndexCurrent
     */
    public function setAdPublishDate($adPublishDate)
    {
        $this->adPublishDate = $adPublishDate;
    
        return $this;
    }

    /**
     * Get adPublishDate
     *
     * @return integer 
     */
    public function getAdPublishDate()
    {
        return $this->adPublishDate;
    }

    /**
     * Set flatRooms
     *
     * @param boolean $flatRooms
     * @return AdsIndexCurrent
     */
    public function setFlatRooms($flatRooms)
    {
        $this->flatRooms = $flatRooms;
    
        return $this;
    }

    /**
     * Get flatRooms
     *
     * @return boolean 
     */
    public function getFlatRooms()
    {
        return $this->flatRooms;
    }

    /**
     * Set flatFloor
     *
     * @param boolean $flatFloor
     * @return AdsIndexCurrent
     */
    public function setFlatFloor($flatFloor)
    {
        $this->flatFloor = $flatFloor;
    
        return $this;
    }

    /**
     * Get flatFloor
     *
     * @return boolean 
     */
    public function getFlatFloor()
    {
        return $this->flatFloor;
    }

    /**
     * Set flatSquareAll
     *
     * @param float $flatSquareAll
     * @return AdsIndexCurrent
     */
    public function setFlatSquareAll($flatSquareAll)
    {
        $this->flatSquareAll = $flatSquareAll;
    
        return $this;
    }

    /**
     * Get flatSquareAll
     *
     * @return float 
     */
    public function getFlatSquareAll()
    {
        return $this->flatSquareAll;
    }

    /**
     * Set flatSquareLive
     *
     * @param float $flatSquareLive
     * @return AdsIndexCurrent
     */
    public function setFlatSquareLive($flatSquareLive)
    {
        $this->flatSquareLive = $flatSquareLive;
    
        return $this;
    }

    /**
     * Get flatSquareLive
     *
     * @return float 
     */
    public function getFlatSquareLive()
    {
        return $this->flatSquareLive;
    }

    /**
     * Set flatSquareKitchen
     *
     * @param float $flatSquareKitchen
     * @return AdsIndexCurrent
     */
    public function setFlatSquareKitchen($flatSquareKitchen)
    {
        $this->flatSquareKitchen = $flatSquareKitchen;
    
        return $this;
    }

    /**
     * Get flatSquareKitchen
     *
     * @return float 
     */
    public function getFlatSquareKitchen()
    {
        return $this->flatSquareKitchen;
    }

    /**
     * Set houseFloors
     *
     * @param boolean $houseFloors
     * @return AdsIndexCurrent
     */
    public function setHouseFloors($houseFloors)
    {
        $this->houseFloors = $houseFloors;
    
        return $this;
    }

    /**
     * Get houseFloors
     *
     * @return boolean 
     */
    public function getHouseFloors()
    {
        return $this->houseFloors;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return AdsIndexCurrent
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set adStatus
     *
     * @param boolean $adStatus
     * @return AdsIndexCurrent
     */
    public function setAdStatus($adStatus)
    {
        $this->adStatus = $adStatus;
    
        return $this;
    }

    /**
     * Get adStatus
     *
     * @return boolean 
     */
    public function getAdStatus()
    {
        return $this->adStatus;
    }

    /**
     * Set flNew
     *
     * @param boolean $flNew
     * @return AdsIndexCurrent
     */
    public function setFlNew($flNew)
    {
        $this->flNew = $flNew;
    
        return $this;
    }

    /**
     * Get flNew
     *
     * @return boolean 
     */
    public function getFlNew()
    {
        return $this->flNew;
    }

    /**
     * Set flLastFloor
     *
     * @param boolean $flLastFloor
     * @return AdsIndexCurrent
     */
    public function setFlLastFloor($flLastFloor)
    {
        $this->flLastFloor = $flLastFloor;
    
        return $this;
    }

    /**
     * Get flLastFloor
     *
     * @return boolean 
     */
    public function getFlLastFloor()
    {
        return $this->flLastFloor;
    }

    /**
     * Set contactsPhones
     *
     * @param string $contactsPhones
     * @return AdsIndexCurrent
     */
    public function setContactsPhones($contactsPhones)
    {
        $this->contactsPhones = $contactsPhones;
    
        return $this;
    }

    /**
     * Get contactsPhones
     *
     * @return string 
     */
    public function getContactsPhones()
    {
        return $this->contactsPhones;
    }

    /**
     * Set sourceId
     *
     * @param boolean $sourceId
     * @return AdsIndexCurrent
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    
        return $this;
    }

    /**
     * Get sourceId
     *
     * @return boolean 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set flQualityControl
     *
     * @param boolean $flQualityControl
     * @return AdsIndexCurrent
     */
    public function setFlQualityControl($flQualityControl)
    {
        $this->flQualityControl = $flQualityControl;
    
        return $this;
    }

    /**
     * Get flQualityControl
     *
     * @return boolean 
     */
    public function getFlQualityControl()
    {
        return $this->flQualityControl;
    }
}