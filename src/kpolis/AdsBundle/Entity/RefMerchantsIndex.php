<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefMerchantsIndex
 *
 * @ORM\Table(name="ref_merchants_index")
 * @ORM\Entity
 */
class RefMerchantsIndex
{
    /**
     * @var integer $merchantId
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $merchantId;

    /**
     * @var string $merchantName
     *
     * @ORM\Column(name="merchant_name", type="string", length=20, nullable=true)
     */
    private $merchantName;



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
     * Set merchantName
     *
     * @param string $merchantName
     * @return RefMerchantsIndex
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    
        return $this;
    }

    /**
     * Get merchantName
     *
     * @return string 
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }
}