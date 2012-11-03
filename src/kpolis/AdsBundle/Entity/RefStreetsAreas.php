<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefStreetsAreas
 *
 * @ORM\Table(name="ref_streets_areas")
 * @ORM\Entity
 */
class RefStreetsAreas
{
    /**
     * @var boolean $areaId
     *
     * @ORM\Column(name="area_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $areaId;

    /**
     * @var string $areaName
     *
     * @ORM\Column(name="area_name", type="string", length=100, nullable=true)
     */
    private $areaName;

    /**
     * @var boolean $areaType
     *
     * @ORM\Column(name="area_type", type="boolean", nullable=false)
     */
    private $areaType;



    /**
     * Get areaId
     *
     * @return boolean 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set areaName
     *
     * @param string $areaName
     * @return RefStreetsAreas
     */
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    
        return $this;
    }

    /**
     * Get areaName
     *
     * @return string 
     */
    public function getAreaName()
    {
        return $this->areaName;
    }

    /**
     * Set areaType
     *
     * @param boolean $areaType
     * @return RefStreetsAreas
     */
    public function setAreaType($areaType)
    {
        $this->areaType = $areaType;
    
        return $this;
    }

    /**
     * Get areaType
     *
     * @return boolean 
     */
    public function getAreaType()
    {
        return $this->areaType;
    }
}