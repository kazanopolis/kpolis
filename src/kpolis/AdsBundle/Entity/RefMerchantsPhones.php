<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefMerchantsPhones
 *
 * @ORM\Table(name="ref_merchants_phones")
 * @ORM\Entity
 */
class RefMerchantsPhones
{
    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phone;

    /**
     * @var integer $merchantId
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false)
     */
    private $merchantId;



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
     * Set merchantId
     *
     * @param integer $merchantId
     * @return RefMerchantsPhones
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
}