<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AgenciesPhones
 *
 * @ORM\Table(name="agencies_phones")
 * @ORM\Entity
 */
class AgenciesPhones
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
     * @ORM\Column(name="agency_id", type="integer", nullable=false)
     */
    private $agencyId;

    /**
     * @var string $agencyPhone
     *
     * @ORM\Column(name="agency_phone", type="string", length=12, nullable=true)
     */
    private $agencyPhone;



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
     * @return AgenciesPhones
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
     * Set agencyPhone
     *
     * @param string $agencyPhone
     * @return AgenciesPhones
     */
    public function setAgencyPhone($agencyPhone)
    {
        $this->agencyPhone = $agencyPhone;
    
        return $this;
    }

    /**
     * Get agencyPhone
     *
     * @return string 
     */
    public function getAgencyPhone()
    {
        return $this->agencyPhone;
    }
}