<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ClaimsIndex
 *
 * @ORM\Table(name="claims_index")
 * @ORM\Entity
 */
class ClaimsIndex
{
    /**
     * @var integer $claimId
     *
     * @ORM\Column(name="claim_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claimId;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false)
     */
    private $createDate;

    /**
     * @var integer $lastDate
     *
     * @ORM\Column(name="last_date", type="integer", nullable=false)
     */
    private $lastDate;

    /**
     * @var string $street
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string $housenumber
     *
     * @ORM\Column(name="housenumber", type="string", length=10, nullable=true)
     */
    private $housenumber;

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
     * @var string $servicename
     *
     * @ORM\Column(name="servicename", type="string", length=255, nullable=true)
     */
    private $servicename;

    /**
     * @var string $ordertype
     *
     * @ORM\Column(name="ordertype", type="string", length=15, nullable=true)
     */
    private $ordertype;

    /**
     * @var string $hash
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=true)
     */
    private $hash;

    /**
     * @var string $buildingnumber
     *
     * @ORM\Column(name="buildingnumber", type="string", length=10, nullable=true)
     */
    private $buildingnumber;



    /**
     * Get claimId
     *
     * @return integer 
     */
    public function getClaimId()
    {
        return $this->claimId;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return ClaimsIndex
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return integer 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set lastDate
     *
     * @param integer $lastDate
     * @return ClaimsIndex
     */
    public function setLastDate($lastDate)
    {
        $this->lastDate = $lastDate;
    
        return $this;
    }

    /**
     * Get lastDate
     *
     * @return integer 
     */
    public function getLastDate()
    {
        return $this->lastDate;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return ClaimsIndex
     */
    public function setStreet($street)
    {
        $this->street = $street;
    
        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set housenumber
     *
     * @param string $housenumber
     * @return ClaimsIndex
     */
    public function setHousenumber($housenumber)
    {
        $this->housenumber = $housenumber;
    
        return $this;
    }

    /**
     * Get housenumber
     *
     * @return string 
     */
    public function getHousenumber()
    {
        return $this->housenumber;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return ClaimsIndex
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
     * @return ClaimsIndex
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
     * Set servicename
     *
     * @param string $servicename
     * @return ClaimsIndex
     */
    public function setServicename($servicename)
    {
        $this->servicename = $servicename;
    
        return $this;
    }

    /**
     * Get servicename
     *
     * @return string 
     */
    public function getServicename()
    {
        return $this->servicename;
    }

    /**
     * Set ordertype
     *
     * @param string $ordertype
     * @return ClaimsIndex
     */
    public function setOrdertype($ordertype)
    {
        $this->ordertype = $ordertype;
    
        return $this;
    }

    /**
     * Get ordertype
     *
     * @return string 
     */
    public function getOrdertype()
    {
        return $this->ordertype;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return ClaimsIndex
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    
        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set buildingnumber
     *
     * @param string $buildingnumber
     * @return ClaimsIndex
     */
    public function setBuildingnumber($buildingnumber)
    {
        $this->buildingnumber = $buildingnumber;
    
        return $this;
    }

    /**
     * Get buildingnumber
     *
     * @return string 
     */
    public function getBuildingnumber()
    {
        return $this->buildingnumber;
    }
}