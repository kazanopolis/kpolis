<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ReferenceMimes
 *
 * @ORM\Table(name="reference_mimes")
 * @ORM\Entity
 */
class ReferenceMimes
{
    /**
     * @var boolean $mimeId
     *
     * @ORM\Column(name="mime_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mimeId;

    /**
     * @var string $mimeType
     *
     * @ORM\Column(name="mime_type", type="string", length=70, nullable=true)
     */
    private $mimeType;

    /**
     * @var boolean $mimeGroup
     *
     * @ORM\Column(name="mime_group", type="boolean", nullable=false)
     */
    private $mimeGroup;



    /**
     * Get mimeId
     *
     * @return boolean 
     */
    public function getMimeId()
    {
        return $this->mimeId;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     * @return ReferenceMimes
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    
        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string 
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set mimeGroup
     *
     * @param boolean $mimeGroup
     * @return ReferenceMimes
     */
    public function setMimeGroup($mimeGroup)
    {
        $this->mimeGroup = $mimeGroup;
    
        return $this;
    }

    /**
     * Get mimeGroup
     *
     * @return boolean 
     */
    public function getMimeGroup()
    {
        return $this->mimeGroup;
    }
}