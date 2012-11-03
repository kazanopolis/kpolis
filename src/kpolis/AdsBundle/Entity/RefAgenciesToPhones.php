<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefAgenciesToPhones
 *
 * @ORM\Table(name="ref_agencies_to_phones")
 * @ORM\Entity
 */
class RefAgenciesToPhones
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
     * @var integer $agencyId
     *
     * @ORM\Column(name="agency_id", type="smallint", nullable=false)
     */
    private $agencyId;

    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var string $original
     *
     * @ORM\Column(name="original", type="string", length=50, nullable=true)
     */
    private $original;



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
     * Set agencyId
     *
     * @param integer $agencyId
     * @return RefAgenciesToPhones
     */
    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
    
        return $this;
    }

    /**
     * Get agencyId
     *
     * @return integer 
     */
    public function getAgencyId()
    {
        return $this->agencyId;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return RefAgenciesToPhones
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set original
     *
     * @param string $original
     * @return RefAgenciesToPhones
     */
    public function setOriginal($original)
    {
        $this->original = $original;
    
        return $this;
    }

    /**
     * Get original
     *
     * @return string 
     */
    public function getOriginal()
    {
        return $this->original;
    }
}