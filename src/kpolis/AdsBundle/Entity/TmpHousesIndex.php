<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\TmpHousesIndex
 *
 * @ORM\Table(name="tmp_houses_index")
 * @ORM\Entity
 */
class TmpHousesIndex
{
    /**
     * @var integer $houseId
     *
     * @ORM\Column(name="house_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $houseId;

    /**
     * @var boolean $houseDistrict
     *
     * @ORM\Column(name="house_district", type="boolean", nullable=false)
     */
    private $houseDistrict;

    /**
     * @var integer $houseStreetId
     *
     * @ORM\Column(name="house_street_id", type="smallint", nullable=false)
     */
    private $houseStreetId;

    /**
     * @var integer $houseNumber
     *
     * @ORM\Column(name="house_number", type="smallint", nullable=false)
     */
    private $houseNumber;

    /**
     * @var integer $houseDrob
     *
     * @ORM\Column(name="house_drob", type="smallint", nullable=false)
     */
    private $houseDrob;

    /**
     * @var string $houseBlock
     *
     * @ORM\Column(name="house_block", type="string", length=4, nullable=true)
     */
    private $houseBlock;

    /**
     * @var string $houseKorpus
     *
     * @ORM\Column(name="house_korpus", type="string", length=6, nullable=true)
     */
    private $houseKorpus;

    /**
     * @var boolean $houseFloors
     *
     * @ORM\Column(name="house_floors", type="boolean", nullable=false)
     */
    private $houseFloors;

    /**
     * @var boolean $houseFloors2gis
     *
     * @ORM\Column(name="house_floors_2gis", type="boolean", nullable=false)
     */
    private $houseFloors2gis;

    /**
     * @var boolean $houseStatus
     *
     * @ORM\Column(name="house_status", type="boolean", nullable=false)
     */
    private $houseStatus;

    /**
     * @var string $lat
     *
     * @ORM\Column(name="lat", type="string", length=20, nullable=true)
     */
    private $lat;

    /**
     * @var string $lng
     *
     * @ORM\Column(name="lng", type="string", length=20, nullable=true)
     */
    private $lng;

    /**
     * @var boolean $flManual
     *
     * @ORM\Column(name="fl_manual", type="boolean", nullable=false)
     */
    private $flManual;

    /**
     * @var boolean $houseZhk
     *
     * @ORM\Column(name="house_zhk", type="boolean", nullable=false)
     */
    private $houseZhk;

    /**
     * @var string $houseCrossStreet
     *
     * @ORM\Column(name="house_cross_street", type="string", length=100, nullable=false)
     */
    private $houseCrossStreet;

    /**
     * @var string $houseCrossNumber
     *
     * @ORM\Column(name="house_cross_number", type="string", length=10, nullable=true)
     */
    private $houseCrossNumber;

    /**
     * @var string $housePurpose
     *
     * @ORM\Column(name="house_purpose", type="string", length=100, nullable=true)
     */
    private $housePurpose;

    /**
     * @var string $houseName
     *
     * @ORM\Column(name="house_name", type="string", length=100, nullable=true)
     */
    private $houseName;



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
     * Set houseDistrict
     *
     * @param boolean $houseDistrict
     * @return TmpHousesIndex
     */
    public function setHouseDistrict($houseDistrict)
    {
        $this->houseDistrict = $houseDistrict;
    
        return $this;
    }

    /**
     * Get houseDistrict
     *
     * @return boolean 
     */
    public function getHouseDistrict()
    {
        return $this->houseDistrict;
    }

    /**
     * Set houseStreetId
     *
     * @param integer $houseStreetId
     * @return TmpHousesIndex
     */
    public function setHouseStreetId($houseStreetId)
    {
        $this->houseStreetId = $houseStreetId;
    
        return $this;
    }

    /**
     * Get houseStreetId
     *
     * @return integer 
     */
    public function getHouseStreetId()
    {
        return $this->houseStreetId;
    }

    /**
     * Set houseNumber
     *
     * @param integer $houseNumber
     * @return TmpHousesIndex
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    
        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return integer 
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set houseDrob
     *
     * @param integer $houseDrob
     * @return TmpHousesIndex
     */
    public function setHouseDrob($houseDrob)
    {
        $this->houseDrob = $houseDrob;
    
        return $this;
    }

    /**
     * Get houseDrob
     *
     * @return integer 
     */
    public function getHouseDrob()
    {
        return $this->houseDrob;
    }

    /**
     * Set houseBlock
     *
     * @param string $houseBlock
     * @return TmpHousesIndex
     */
    public function setHouseBlock($houseBlock)
    {
        $this->houseBlock = $houseBlock;
    
        return $this;
    }

    /**
     * Get houseBlock
     *
     * @return string 
     */
    public function getHouseBlock()
    {
        return $this->houseBlock;
    }

    /**
     * Set houseKorpus
     *
     * @param string $houseKorpus
     * @return TmpHousesIndex
     */
    public function setHouseKorpus($houseKorpus)
    {
        $this->houseKorpus = $houseKorpus;
    
        return $this;
    }

    /**
     * Get houseKorpus
     *
     * @return string 
     */
    public function getHouseKorpus()
    {
        return $this->houseKorpus;
    }

    /**
     * Set houseFloors
     *
     * @param boolean $houseFloors
     * @return TmpHousesIndex
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
     * Set houseFloors2gis
     *
     * @param boolean $houseFloors2gis
     * @return TmpHousesIndex
     */
    public function setHouseFloors2gis($houseFloors2gis)
    {
        $this->houseFloors2gis = $houseFloors2gis;
    
        return $this;
    }

    /**
     * Get houseFloors2gis
     *
     * @return boolean 
     */
    public function getHouseFloors2gis()
    {
        return $this->houseFloors2gis;
    }

    /**
     * Set houseStatus
     *
     * @param boolean $houseStatus
     * @return TmpHousesIndex
     */
    public function setHouseStatus($houseStatus)
    {
        $this->houseStatus = $houseStatus;
    
        return $this;
    }

    /**
     * Get houseStatus
     *
     * @return boolean 
     */
    public function getHouseStatus()
    {
        return $this->houseStatus;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return TmpHousesIndex
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return TmpHousesIndex
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    
        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set flManual
     *
     * @param boolean $flManual
     * @return TmpHousesIndex
     */
    public function setFlManual($flManual)
    {
        $this->flManual = $flManual;
    
        return $this;
    }

    /**
     * Get flManual
     *
     * @return boolean 
     */
    public function getFlManual()
    {
        return $this->flManual;
    }

    /**
     * Set houseZhk
     *
     * @param boolean $houseZhk
     * @return TmpHousesIndex
     */
    public function setHouseZhk($houseZhk)
    {
        $this->houseZhk = $houseZhk;
    
        return $this;
    }

    /**
     * Get houseZhk
     *
     * @return boolean 
     */
    public function getHouseZhk()
    {
        return $this->houseZhk;
    }

    /**
     * Set houseCrossStreet
     *
     * @param string $houseCrossStreet
     * @return TmpHousesIndex
     */
    public function setHouseCrossStreet($houseCrossStreet)
    {
        $this->houseCrossStreet = $houseCrossStreet;
    
        return $this;
    }

    /**
     * Get houseCrossStreet
     *
     * @return string 
     */
    public function getHouseCrossStreet()
    {
        return $this->houseCrossStreet;
    }

    /**
     * Set houseCrossNumber
     *
     * @param string $houseCrossNumber
     * @return TmpHousesIndex
     */
    public function setHouseCrossNumber($houseCrossNumber)
    {
        $this->houseCrossNumber = $houseCrossNumber;
    
        return $this;
    }

    /**
     * Get houseCrossNumber
     *
     * @return string 
     */
    public function getHouseCrossNumber()
    {
        return $this->houseCrossNumber;
    }

    /**
     * Set housePurpose
     *
     * @param string $housePurpose
     * @return TmpHousesIndex
     */
    public function setHousePurpose($housePurpose)
    {
        $this->housePurpose = $housePurpose;
    
        return $this;
    }

    /**
     * Get housePurpose
     *
     * @return string 
     */
    public function getHousePurpose()
    {
        return $this->housePurpose;
    }

    /**
     * Set houseName
     *
     * @param string $houseName
     * @return TmpHousesIndex
     */
    public function setHouseName($houseName)
    {
        $this->houseName = $houseName;
    
        return $this;
    }

    /**
     * Get houseName
     *
     * @return string 
     */
    public function getHouseName()
    {
        return $this->houseName;
    }
}