<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\TmpStreetsVdr
 *
 * @ORM\Table(name="tmp_streets_vdr")
 * @ORM\Entity
 */
class TmpStreetsVdr
{
    /**
     * @var integer $tmpStreetId
     *
     * @ORM\Column(name="tmp_street_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmpStreetId;

    /**
     * @var string $tmpStreetName
     *
     * @ORM\Column(name="tmp_street_name", type="string", length=255, nullable=true)
     */
    private $tmpStreetName;

    /**
     * @var integer $tmpSourceId
     *
     * @ORM\Column(name="tmp_source_id", type="integer", nullable=false)
     */
    private $tmpSourceId;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;



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
     * Set tmpStreetName
     *
     * @param string $tmpStreetName
     * @return TmpStreetsVdr
     */
    public function setTmpStreetName($tmpStreetName)
    {
        $this->tmpStreetName = $tmpStreetName;
    
        return $this;
    }

    /**
     * Get tmpStreetName
     *
     * @return string 
     */
    public function getTmpStreetName()
    {
        return $this->tmpStreetName;
    }

    /**
     * Set tmpSourceId
     *
     * @param integer $tmpSourceId
     * @return TmpStreetsVdr
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
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return TmpStreetsVdr
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
}