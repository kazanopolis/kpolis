<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefAgenciesIndex
 *
 * @ORM\Table(name="ref_agencies_index")
 * @ORM\Entity
 */
class RefAgenciesIndex
{
    /**
     * @var integer $agencyId
     *
     * @ORM\Column(name="agency_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agencyId;

    /**
     * @var string $agencyAddress
     *
     * @ORM\Column(name="agency_address", type="string", length=100, nullable=true)
     */
    private $agencyAddress;

    /**
     * @var integer $merchantId
     *
     * @ORM\Column(name="merchant_id", type="smallint", nullable=false)
     */
    private $merchantId;

    /**
     * @var string $agencyName
     *
     * @ORM\Column(name="agency_name", type="string", length=100, nullable=true)
     */
    private $agencyName;



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
     * Set agencyAddress
     *
     * @param string $agencyAddress
     * @return RefAgenciesIndex
     */
    public function setAgencyAddress($agencyAddress)
    {
        $this->agencyAddress = $agencyAddress;
    
        return $this;
    }

    /**
     * Get agencyAddress
     *
     * @return string 
     */
    public function getAgencyAddress()
    {
        return $this->agencyAddress;
    }

    /**
     * Set merchantId
     *
     * @param integer $merchantId
     * @return RefAgenciesIndex
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    
        return $this;
    }

    /**
     * Get merchantId
     *
     * @return integer 
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set agencyName
     *
     * @param string $agencyName
     * @return RefAgenciesIndex
     */
    public function setAgencyName($agencyName)
    {
        $this->agencyName = $agencyName;
    
        return $this;
    }

    /**
     * Get agencyName
     *
     * @return string 
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }
}