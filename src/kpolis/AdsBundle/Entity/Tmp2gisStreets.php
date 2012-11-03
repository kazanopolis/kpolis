<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\Tmp2gisStreets
 *
 * @ORM\Table(name="tmp_2gis_streets")
 * @ORM\Entity
 */
class Tmp2gisStreets
{
    /**
     * @var integer $tmpId
     *
     * @ORM\Column(name="tmp_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tmpId;

    /**
     * @var string $streetName
     *
     * @ORM\Column(name="street_name", type="string", length=255, nullable=true)
     */
    private $streetName;

    /**
     * @var integer $streetId
     *
     * @ORM\Column(name="street_id", type="integer", nullable=false)
     */
    private $streetId;

    /**
     * @var string $flOut
     *
     * @ORM\Column(name="fl_out", type="string", length=100, nullable=false)
     */
    private $flOut;



    /**
     * Get tmpId
     *
     * @return integer 
     */
    public function getTmpId()
    {
        return $this->tmpId;
    }

    /**
     * Set streetName
     *
     * @param string $streetName
     * @return Tmp2gisStreets
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
     * Set streetId
     *
     * @param integer $streetId
     * @return Tmp2gisStreets
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
     * Set flOut
     *
     * @param string $flOut
     * @return Tmp2gisStreets
     */
    public function setFlOut($flOut)
    {
        $this->flOut = $flOut;
    
        return $this;
    }

    /**
     * Get flOut
     *
     * @return string 
     */
    public function getFlOut()
    {
        return $this->flOut;
    }
}