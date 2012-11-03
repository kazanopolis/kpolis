<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefHousesIndex
 *
 * @ORM\Table(name="ref_houses_index")
 * @ORM\Entity
 */
class RefHousesIndex
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
     * @var boolean $houseStatus
     *
     * @ORM\Column(name="house_status", type="boolean", nullable=false)
     */
    private $houseStatus;

    /**
     * @var string $lng
     *
     * @ORM\Column(name="lng", type="string", length=20, nullable=true)
     */
    private $lng;

    /**
     * @var string $lat
     *
     * @ORM\Column(name="lat", type="string", length=20, nullable=true)
     */
    private $lat;

    /**
     * @var string $houseCrossId
     *
     * @ORM\Column(name="house_cross_id", type="string", length=100, nullable=false)
     */
    private $houseCrossId;

    /**
     * @var boolean $flBuild
     *
     * @ORM\Column(name="fl_build", type="boolean", nullable=false)
     */
    private $flBuild;

    /**
     * @var boolean $fl2gisChecked
     *
     * @ORM\Column(name="fl_2gis_checked", type="boolean", nullable=true)
     */
    private $fl2gisChecked;

    /**
     * @var boolean $houseZhkId
     *
     * @ORM\Column(name="house_zhk_id", type="boolean", nullable=false)
     */
    private $houseZhkId;

    /**
     * @var integer $houseParentId
     *
     * @ORM\Column(name="house_parent_id", type="integer", nullable=false)
     */
    private $houseParentId;

    /**
     * @var boolean $tmpCorrectFlag
     *
     * @ORM\Column(name="tmp_correct_flag", type="boolean", nullable=false)
     */
    private $tmpCorrectFlag;

    /**
     * @var string $houseBuildNumber
     *
     * @ORM\Column(name="house_build_number", type="string", length=10, nullable=false)
     */
    private $houseBuildNumber;



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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * @return RefHousesIndex
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
     * Set houseStatus
     *
     * @param boolean $houseStatus
     * @return RefHousesIndex
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
     * Set lng
     *
     * @param string $lng
     * @return RefHousesIndex
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
     * Set lat
     *
     * @param string $lat
     * @return RefHousesIndex
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
     * Set houseCrossId
     *
     * @param string $houseCrossId
     * @return RefHousesIndex
     */
    public function setHouseCrossId($houseCrossId)
    {
        $this->houseCrossId = $houseCrossId;
    
        return $this;
    }

    /**
     * Get houseCrossId
     *
     * @return string 
     */
    public function getHouseCrossId()
    {
        return $this->houseCrossId;
    }

    /**
     * Set flBuild
     *
     * @param boolean $flBuild
     * @return RefHousesIndex
     */
    public function setFlBuild($flBuild)
    {
        $this->flBuild = $flBuild;
    
        return $this;
    }

    /**
     * Get flBuild
     *
     * @return boolean 
     */
    public function getFlBuild()
    {
        return $this->flBuild;
    }

    /**
     * Set fl2gisChecked
     *
     * @param boolean $fl2gisChecked
     * @return RefHousesIndex
     */
    public function setFl2gisChecked($fl2gisChecked)
    {
        $this->fl2gisChecked = $fl2gisChecked;
    
        return $this;
    }

    /**
     * Get fl2gisChecked
     *
     * @return boolean 
     */
    public function getFl2gisChecked()
    {
        return $this->fl2gisChecked;
    }

    /**
     * Set houseZhkId
     *
     * @param boolean $houseZhkId
     * @return RefHousesIndex
     */
    public function setHouseZhkId($houseZhkId)
    {
        $this->houseZhkId = $houseZhkId;
    
        return $this;
    }

    /**
     * Get houseZhkId
     *
     * @return boolean 
     */
    public function getHouseZhkId()
    {
        return $this->houseZhkId;
    }

    /**
     * Set houseParentId
     *
     * @param integer $houseParentId
     * @return RefHousesIndex
     */
    public function setHouseParentId($houseParentId)
    {
        $this->houseParentId = $houseParentId;
    
        return $this;
    }

    /**
     * Get houseParentId
     *
     * @return integer 
     */
    public function getHouseParentId()
    {
        return $this->houseParentId;
    }

    /**
     * Set tmpCorrectFlag
     *
     * @param boolean $tmpCorrectFlag
     * @return RefHousesIndex
     */
    public function setTmpCorrectFlag($tmpCorrectFlag)
    {
        $this->tmpCorrectFlag = $tmpCorrectFlag;
    
        return $this;
    }

    /**
     * Get tmpCorrectFlag
     *
     * @return boolean 
     */
    public function getTmpCorrectFlag()
    {
        return $this->tmpCorrectFlag;
    }

    /**
     * Set houseBuildNumber
     *
     * @param string $houseBuildNumber
     * @return RefHousesIndex
     */
    public function setHouseBuildNumber($houseBuildNumber)
    {
        $this->houseBuildNumber = $houseBuildNumber;
    
        return $this;
    }

    /**
     * Get houseBuildNumber
     *
     * @return string 
     */
    public function getHouseBuildNumber()
    {
        return $this->houseBuildNumber;
    }
}