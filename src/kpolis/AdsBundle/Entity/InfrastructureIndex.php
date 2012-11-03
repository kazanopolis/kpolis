<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\InfrastructureIndex
 *
 * @ORM\Table(name="infrastructure_index")
 * @ORM\Entity
 */
class InfrastructureIndex
{
    /**
     * @var integer $objectId
     *
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $objectId;

    /**
     * @var string $objectName
     *
     * @ORM\Column(name="object_name", type="string", length=200, nullable=true)
     */
    private $objectName;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var integer $houseId
     *
     * @ORM\Column(name="house_id", type="integer", nullable=false)
     */
    private $houseId;

    /**
     * @var string $objectAddress
     *
     * @ORM\Column(name="object_address", type="string", length=255, nullable=true)
     */
    private $objectAddress;

    /**
     * @var string $lat
     *
     * @ORM\Column(name="lat", type="string", length=30, nullable=true)
     */
    private $lat;

    /**
     * @var string $lng
     *
     * @ORM\Column(name="lng", type="string", length=30, nullable=true)
     */
    private $lng;

    /**
     * @var string $2gisId
     *
     * @ORM\Column(name="2gis_id", type="string", length=20, nullable=true)
     */
    private $gisId;



    /**
     * Get objectId
     *
     * @return integer 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     * @return InfrastructureIndex
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;
    
        return $this;
    }

    /**
     * Get objectName
     *
     * @return string 
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return InfrastructureIndex
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
     * Set houseId
     *
     * @param integer $houseId
     * @return InfrastructureIndex
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
     * Set objectAddress
     *
     * @param string $objectAddress
     * @return InfrastructureIndex
     */
    public function setObjectAddress($objectAddress)
    {
        $this->objectAddress = $objectAddress;
    
        return $this;
    }

    /**
     * Get objectAddress
     *
     * @return string 
     */
    public function getObjectAddress()
    {
        return $this->objectAddress;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return InfrastructureIndex
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
     * @return InfrastructureIndex
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
     * Set gisId
     *
     * @param string $gisId
     * @return InfrastructureIndex
     */
    public function setGisId($gisId)
    {
        $this->gisId = $gisId;
    
        return $this;
    }

    /**
     * Get gisId
     *
     * @return string 
     */
    public function getGisId()
    {
        return $this->gisId;
    }
}