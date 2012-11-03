<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefDevelopersIndex
 *
 * @ORM\Table(name="ref_developers_index")
 * @ORM\Entity
 */
class RefDevelopersIndex
{
    /**
     * @var boolean $developerId
     *
     * @ORM\Column(name="developer_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $developerId;

    /**
     * @var string $developerName
     *
     * @ORM\Column(name="developer_name", type="string", length=255, nullable=true)
     */
    private $developerName;



    /**
     * Get developerId
     *
     * @return boolean 
     */
    public function getDeveloperId()
    {
        return $this->developerId;
    }

    /**
     * Set developerName
     *
     * @param string $developerName
     * @return RefDevelopersIndex
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
    
        return $this;
    }

    /**
     * Get developerName
     *
     * @return string 
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }
}