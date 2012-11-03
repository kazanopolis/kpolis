<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\TmpHousesVdr
 *
 * @ORM\Table(name="tmp_houses_vdr")
 * @ORM\Entity
 */
class TmpHousesVdr
{
    /**
     * @var integer $tmpHouseId
     *
     * @ORM\Column(name="tmp_house_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmpHouseId;

    /**
     * @var string $tmpHouseNumber
     *
     * @ORM\Column(name="tmp_house_number", type="string", length=20, nullable=true)
     */
    private $tmpHouseNumber;

    /**
     * @var integer $tmpSourceId
     *
     * @ORM\Column(name="tmp_source_id", type="integer", nullable=false)
     */
    private $tmpSourceId;

    /**
     * @var integer $tmpStreetId
     *
     * @ORM\Column(name="tmp_street_id", type="integer", nullable=false)
     */
    private $tmpStreetId;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var string $html
     *
     * @ORM\Column(name="html", type="text", nullable=true)
     */
    private $html;



    /**
     * Get tmpHouseId
     *
     * @return integer 
     */
    public function getTmpHouseId()
    {
        return $this->tmpHouseId;
    }

    /**
     * Set tmpHouseNumber
     *
     * @param string $tmpHouseNumber
     * @return TmpHousesVdr
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
     * Set tmpSourceId
     *
     * @param integer $tmpSourceId
     * @return TmpHousesVdr
     */
    public function setTmpSourceId($tmpSourceId)
    {
        $this->tmpSourceId = $tmpSourceId;
    
        return $this;
    }

    /**
     * Get tmpSourceId
     *
     * @return integer 
     */
    public function getTmpSourceId()
    {
        return $this->tmpSourceId;
    }

    /**
     * Set tmpStreetId
     *
     * @param integer $tmpStreetId
     * @return TmpHousesVdr
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
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return TmpHousesVdr
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
     * Set html
     *
     * @param string $html
     * @return TmpHousesVdr
     */
    public function setHtml($html)
    {
        $this->html = $html;
    
        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }
}