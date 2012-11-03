<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefSourcesIndex
 *
 * @ORM\Table(name="ref_sources_index")
 * @ORM\Entity
 */
class RefSourcesIndex
{
    /**
     * @var boolean $sourceId
     *
     * @ORM\Column(name="source_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sourceId;

    /**
     * @var string $sourceName
     *
     * @ORM\Column(name="source_name", type="string", length=255, nullable=true)
     */
    private $sourceName;

    /**
     * @var string $sourceUrl
     *
     * @ORM\Column(name="source_url", type="string", length=255, nullable=true)
     */
    private $sourceUrl;

    /**
     * @var boolean $sourceMode
     *
     * @ORM\Column(name="source_mode", type="boolean", nullable=false)
     */
    private $sourceMode;



    /**
     * Get sourceId
     *
     * @return boolean 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set sourceName
     *
     * @param string $sourceName
     * @return RefSourcesIndex
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;
    
        return $this;
    }

    /**
     * Get sourceName
     *
     * @return string 
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * Set sourceUrl
     *
     * @param string $sourceUrl
     * @return RefSourcesIndex
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    
        return $this;
    }

    /**
     * Get sourceUrl
     *
     * @return string 
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * Set sourceMode
     *
     * @param boolean $sourceMode
     * @return RefSourcesIndex
     */
    public function setSourceMode($sourceMode)
    {
        $this->sourceMode = $sourceMode;
    
        return $this;
    }

    /**
     * Get sourceMode
     *
     * @return boolean 
     */
    public function getSourceMode()
    {
        return $this->sourceMode;
    }
}