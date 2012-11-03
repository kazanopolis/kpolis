<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AgenciesIndex
 *
 * @ORM\Table(name="agencies_index")
 * @ORM\Entity
 */
class AgenciesIndex
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
     * @var string $agencyName
     *
     * @ORM\Column(name="agency_name", type="string", length=120, nullable=true)
     */
    private $agencyName;

    /**
     * @var string $agencyAddress
     *
     * @ORM\Column(name="agency_address", type="string", length=120, nullable=true)
     */
    private $agencyAddress;

    /**
     * @var string $agencyOffice
     *
     * @ORM\Column(name="agency_office", type="string", length=50, nullable=true)
     */
    private $agencyOffice;

    /**
     * @var string $agencyUri
     *
     * @ORM\Column(name="agency_uri", type="string", length=255, nullable=true)
     */
    private $agencyUri;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false)
     */
    private $createDate;

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
     * @var string $agencyEmail
     *
     * @ORM\Column(name="agency_email", type="string", length=50, nullable=true)
     */
    private $agencyEmail;

    /**
     * @var string $agencySite
     *
     * @ORM\Column(name="agency_site", type="string", length=255, nullable=true)
     */
    private $agencySite;

    /**
     * @var string $agencyUrl
     *
     * @ORM\Column(name="agency_url", type="text", nullable=true)
     */
    private $agencyUrl;



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
     * Set agencyName
     *
     * @param string $agencyName
     * @return AgenciesIndex
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

    /**
     * Set agencyAddress
     *
     * @param string $agencyAddress
     * @return AgenciesIndex
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
     * Set agencyOffice
     *
     * @param string $agencyOffice
     * @return AgenciesIndex
     */
    public function setAgencyOffice($agencyOffice)
    {
        $this->agencyOffice = $agencyOffice;
    
        return $this;
    }

    /**
     * Get agencyOffice
     *
     * @return string 
     */
    public function getAgencyOffice()
    {
        return $this->agencyOffice;
    }

    /**
     * Set agencyUri
     *
     * @param string $agencyUri
     * @return AgenciesIndex
     */
    public function setAgencyUri($agencyUri)
    {
        $this->agencyUri = $agencyUri;
    
        return $this;
    }

    /**
     * Get agencyUri
     *
     * @return string 
     */
    public function getAgencyUri()
    {
        return $this->agencyUri;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return AgenciesIndex
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
     * Set lat
     *
     * @param string $lat
     * @return AgenciesIndex
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
     * @return AgenciesIndex
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
     * Set agencyEmail
     *
     * @param string $agencyEmail
     * @return AgenciesIndex
     */
    public function setAgencyEmail($agencyEmail)
    {
        $this->agencyEmail = $agencyEmail;
    
        return $this;
    }

    /**
     * Get agencyEmail
     *
     * @return string 
     */
    public function getAgencyEmail()
    {
        return $this->agencyEmail;
    }

    /**
     * Set agencySite
     *
     * @param string $agencySite
     * @return AgenciesIndex
     */
    public function setAgencySite($agencySite)
    {
        $this->agencySite = $agencySite;
    
        return $this;
    }

    /**
     * Get agencySite
     *
     * @return string 
     */
    public function getAgencySite()
    {
        return $this->agencySite;
    }

    /**
     * Set agencyUrl
     *
     * @param string $agencyUrl
     * @return AgenciesIndex
     */
    public function setAgencyUrl($agencyUrl)
    {
        $this->agencyUrl = $agencyUrl;
    
        return $this;
    }

    /**
     * Get agencyUrl
     *
     * @return string 
     */
    public function getAgencyUrl()
    {
        return $this->agencyUrl;
    }
}