<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefZhksStreets
 *
 * @ORM\Table(name="ref_zhks_streets")
 * @ORM\Entity
 */
class RefZhksStreets
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set zhkId
     *
     * @param boolean $zhkId
     * @return RefZhksStreets
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
     * @return RefZhksStreets
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
}