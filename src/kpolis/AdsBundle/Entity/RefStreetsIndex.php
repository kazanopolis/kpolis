<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefStreetsIndex
 *
 * @ORM\Table(name="ref_streets_index")
 * @ORM\Entity
 */
class RefStreetsIndex
{
    /**
     * @var integer $streetId
     *
     * @ORM\Column(name="street_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $streetId;

    /**
     * @var boolean $streetType
     *
     * @ORM\Column(name="street_type", type="boolean", nullable=false)
     */
    private $streetType;

    /**
     * @var string $streetName
     *
     * @ORM\Column(name="street_name", type="string", length=40, nullable=true)
     */
    private $streetName;

    /**
     * @var string $streetUrl
     *
     * @ORM\Column(name="street_url", type="string", length=100, nullable=true)
     */
    private $streetUrl;

    /**
     * @var boolean $streetArea
     *
     * @ORM\Column(name="street_area", type="boolean", nullable=false)
     */
    private $streetArea;

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
     * @var boolean $flGmapChecked
     *
     * @ORM\Column(name="fl_gmap_checked", type="boolean", nullable=false)
     */
    private $flGmapChecked;

    /**
     * @var boolean $accuracy
     *
     * @ORM\Column(name="accuracy", type="boolean", nullable=false)
     */
    private $accuracy;



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
     * Set streetType
     *
     * @param boolean $streetType
     * @return RefStreetsIndex
     */
    public function setStreetType($streetType)
    {
        $this->streetType = $streetType;
    
        return $this;
    }

    /**
     * Get streetType
     *
     * @return boolean 
     */
    public function getStreetType()
    {
        return $this->streetType;
    }

    /**
     * Set streetName
     *
     * @param string $streetName
     * @return RefStreetsIndex
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    
        return $this;
    }

    /**
     * Get streetName
     *
     * @return string 
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Set streetUrl
     *
     * @param string $streetUrl
     * @return RefStreetsIndex
     */
    public function setStreetUrl($streetUrl)
    {
        $this->streetUrl = $streetUrl;
    
        return $this;
    }

    /**
     * Get streetUrl
     *
     * @return string 
     */
    public function getStreetUrl()
    {
        return $this->streetUrl;
    }

    /**
     * Set streetArea
     *
     * @param boolean $streetArea
     * @return RefStreetsIndex
     */
    public function setStreetArea($streetArea)
    {
        $this->streetArea = $streetArea;
    
        return $this;
    }

    /**
     * Get streetArea
     *
     * @return boolean 
     */
    public function getStreetArea()
    {
        return $this->streetArea;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return RefStreetsIndex
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
     * @return RefStreetsIndex
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
     * Set flGmapChecked
     *
     * @param boolean $flGmapChecked
     * @return RefStreetsIndex
     */
    public function setFlGmapChecked($flGmapChecked)
    {
        $this->flGmapChecked = $flGmapChecked;
    
        return $this;
    }

    /**
     * Get flGmapChecked
     *
     * @return boolean 
     */
    public function getFlGmapChecked()
    {
        return $this->flGmapChecked;
    }

    /**
     * Set accuracy
     *
     * @param boolean $accuracy
     * @return RefStreetsIndex
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
    
        return $this;
    }

    /**
     * Get accuracy
     *
     * @return boolean 
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }
}