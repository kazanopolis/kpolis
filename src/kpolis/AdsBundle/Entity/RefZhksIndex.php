<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefZhksIndex
 *
 * @ORM\Table(name="ref_zhks_index")
 * @ORM\Entity
 */
class RefZhksIndex
{
    /**
     * @var boolean $zhkId
     *
     * @ORM\Column(name="zhk_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zhkId;

    /**
     * @var string $zhkName
     *
     * @ORM\Column(name="zhk_name", type="string", length=100, nullable=true)
     */
    private $zhkName;

    /**
     * @var string $zhkUrl
     *
     * @ORM\Column(name="zhk_url", type="string", length=50, nullable=true)
     */
    private $zhkUrl;

    /**
     * @var boolean $zhkParent
     *
     * @ORM\Column(name="zhk_parent", type="boolean", nullable=false)
     */
    private $zhkParent;

    /**
     * @var boolean $zhkDistrict
     *
     * @ORM\Column(name="zhk_district", type="boolean", nullable=true)
     */
    private $zhkDistrict;

    /**
     * @var boolean $zhkHousesCount
     *
     * @ORM\Column(name="zhk_houses_count", type="boolean", nullable=false)
     */
    private $zhkHousesCount;

    /**
     * @var boolean $zhkFloorsFrom
     *
     * @ORM\Column(name="zhk_floors_from", type="boolean", nullable=false)
     */
    private $zhkFloorsFrom;

    /**
     * @var boolean $zhkFloorsTo
     *
     * @ORM\Column(name="zhk_floors_to", type="boolean", nullable=false)
     */
    private $zhkFloorsTo;

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
     * @var string $zhkKeywords
     *
     * @ORM\Column(name="zhk_keywords", type="string", length=255, nullable=true)
     */
    private $zhkKeywords;

    /**
     * @var boolean $flSearchMode
     *
     * @ORM\Column(name="fl_search_mode", type="boolean", nullable=false)
     */
    private $flSearchMode;

    /**
     * @var string $excludeWords
     *
     * @ORM\Column(name="exclude_words", type="string", length=255, nullable=true)
     */
    private $excludeWords;

    /**
     * @var string $zhkGeometry
     *
     * @ORM\Column(name="zhk_geometry", type="text", nullable=true)
     */
    private $zhkGeometry;

    /**
     * @var boolean $developerId
     *
     * @ORM\Column(name="developer_id", type="boolean", nullable=false)
     */
    private $developerId;

    /**
     * @var integer $contentTagId
     *
     * @ORM\Column(name="content_tag_id", type="smallint", nullable=false)
     */
    private $contentTagId;

    /**
     * @var string $zhkSite
     *
     * @ORM\Column(name="zhk_site", type="string", length=100, nullable=true)
     */
    private $zhkSite;

    /**
     * @var boolean $zhkIndex
     *
     * @ORM\Column(name="zhk_index", type="boolean", nullable=false)
     */
    private $zhkIndex;



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
     * Set zhkName
     *
     * @param string $zhkName
     * @return RefZhksIndex
     */
    public function setZhkName($zhkName)
    {
        $this->zhkName = $zhkName;
    
        return $this;
    }

    /**
     * Get zhkName
     *
     * @return string 
     */
    public function getZhkName()
    {
        return $this->zhkName;
    }

    /**
     * Set zhkUrl
     *
     * @param string $zhkUrl
     * @return RefZhksIndex
     */
    public function setZhkUrl($zhkUrl)
    {
        $this->zhkUrl = $zhkUrl;
    
        return $this;
    }

    /**
     * Get zhkUrl
     *
     * @return string 
     */
    public function getZhkUrl()
    {
        return $this->zhkUrl;
    }

    /**
     * Set zhkParent
     *
     * @param boolean $zhkParent
     * @return RefZhksIndex
     */
    public function setZhkParent($zhkParent)
    {
        $this->zhkParent = $zhkParent;
    
        return $this;
    }

    /**
     * Get zhkParent
     *
     * @return boolean 
     */
    public function getZhkParent()
    {
        return $this->zhkParent;
    }

    /**
     * Set zhkDistrict
     *
     * @param boolean $zhkDistrict
     * @return RefZhksIndex
     */
    public function setZhkDistrict($zhkDistrict)
    {
        $this->zhkDistrict = $zhkDistrict;
    
        return $this;
    }

    /**
     * Get zhkDistrict
     *
     * @return boolean 
     */
    public function getZhkDistrict()
    {
        return $this->zhkDistrict;
    }

    /**
     * Set zhkHousesCount
     *
     * @param boolean $zhkHousesCount
     * @return RefZhksIndex
     */
    public function setZhkHousesCount($zhkHousesCount)
    {
        $this->zhkHousesCount = $zhkHousesCount;
    
        return $this;
    }

    /**
     * Get zhkHousesCount
     *
     * @return boolean 
     */
    public function getZhkHousesCount()
    {
        return $this->zhkHousesCount;
    }

    /**
     * Set zhkFloorsFrom
     *
     * @param boolean $zhkFloorsFrom
     * @return RefZhksIndex
     */
    public function setZhkFloorsFrom($zhkFloorsFrom)
    {
        $this->zhkFloorsFrom = $zhkFloorsFrom;
    
        return $this;
    }

    /**
     * Get zhkFloorsFrom
     *
     * @return boolean 
     */
    public function getZhkFloorsFrom()
    {
        return $this->zhkFloorsFrom;
    }

    /**
     * Set zhkFloorsTo
     *
     * @param boolean $zhkFloorsTo
     * @return RefZhksIndex
     */
    public function setZhkFloorsTo($zhkFloorsTo)
    {
        $this->zhkFloorsTo = $zhkFloorsTo;
    
        return $this;
    }

    /**
     * Get zhkFloorsTo
     *
     * @return boolean 
     */
    public function getZhkFloorsTo()
    {
        return $this->zhkFloorsTo;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return RefZhksIndex
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
     * @return RefZhksIndex
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
     * Set zhkKeywords
     *
     * @param string $zhkKeywords
     * @return RefZhksIndex
     */
    public function setZhkKeywords($zhkKeywords)
    {
        $this->zhkKeywords = $zhkKeywords;
    
        return $this;
    }

    /**
     * Get zhkKeywords
     *
     * @return string 
     */
    public function getZhkKeywords()
    {
        return $this->zhkKeywords;
    }

    /**
     * Set flSearchMode
     *
     * @param boolean $flSearchMode
     * @return RefZhksIndex
     */
    public function setFlSearchMode($flSearchMode)
    {
        $this->flSearchMode = $flSearchMode;
    
        return $this;
    }

    /**
     * Get flSearchMode
     *
     * @return boolean 
     */
    public function getFlSearchMode()
    {
        return $this->flSearchMode;
    }

    /**
     * Set excludeWords
     *
     * @param string $excludeWords
     * @return RefZhksIndex
     */
    public function setExcludeWords($excludeWords)
    {
        $this->excludeWords = $excludeWords;
    
        return $this;
    }

    /**
     * Get excludeWords
     *
     * @return string 
     */
    public function getExcludeWords()
    {
        return $this->excludeWords;
    }

    /**
     * Set zhkGeometry
     *
     * @param string $zhkGeometry
     * @return RefZhksIndex
     */
    public function setZhkGeometry($zhkGeometry)
    {
        $this->zhkGeometry = $zhkGeometry;
    
        return $this;
    }

    /**
     * Get zhkGeometry
     *
     * @return string 
     */
    public function getZhkGeometry()
    {
        return $this->zhkGeometry;
    }

    /**
     * Set developerId
     *
     * @param boolean $developerId
     * @return RefZhksIndex
     */
    public function setDeveloperId($developerId)
    {
        $this->developerId = $developerId;
    
        return $this;
    }

    /**
     * Get developerId
     *
     * @return boolean 
     */
    public function getDeveloperId()
    {
        return $this->developerId;
    }

    /**
     * Set contentTagId
     *
     * @param integer $contentTagId
     * @return RefZhksIndex
     */
    public function setContentTagId($contentTagId)
    {
        $this->contentTagId = $contentTagId;
    
        return $this;
    }

    /**
     * Get contentTagId
     *
     * @return integer 
     */
    public function getContentTagId()
    {
        return $this->contentTagId;
    }

    /**
     * Set zhkSite
     *
     * @param string $zhkSite
     * @return RefZhksIndex
     */
    public function setZhkSite($zhkSite)
    {
        $this->zhkSite = $zhkSite;
    
        return $this;
    }

    /**
     * Get zhkSite
     *
     * @return string 
     */
    public function getZhkSite()
    {
        return $this->zhkSite;
    }

    /**
     * Set zhkIndex
     *
     * @param boolean $zhkIndex
     * @return RefZhksIndex
     */
    public function setZhkIndex($zhkIndex)
    {
        $this->zhkIndex = $zhkIndex;
    
        return $this;
    }

    /**
     * Get zhkIndex
     *
     * @return boolean 
     */
    public function getZhkIndex()
    {
        return $this->zhkIndex;
    }
}