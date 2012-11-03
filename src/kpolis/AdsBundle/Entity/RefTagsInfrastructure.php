<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefTagsInfrastructure
 *
 * @ORM\Table(name="ref_tags_infrastructure")
 * @ORM\Entity
 */
class RefTagsInfrastructure
{
    /**
     * @var boolean $tagId
     *
     * @ORM\Column(name="tag_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var string $tagName
     *
     * @ORM\Column(name="tag_name", type="string", length=40, nullable=true)
     */
    private $tagName;

    /**
     * @var boolean $flOrder
     *
     * @ORM\Column(name="fl_order", type="boolean", nullable=false)
     */
    private $flOrder;

    /**
     * @var string $2gisRubrics
     *
     * @ORM\Column(name="2gis_rubrics", type="string", length=255, nullable=true)
     */
    private $gisRubrics;

    /**
     * @var string $2gisPages
     *
     * @ORM\Column(name="2gis_pages", type="string", length=255, nullable=true)
     */
    private $gisPages;



    /**
     * Get tagId
     *
     * @return boolean 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagName
     *
     * @param string $tagName
     * @return RefTagsInfrastructure
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    
        return $this;
    }

    /**
     * Get tagName
     *
     * @return string 
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set flOrder
     *
     * @param boolean $flOrder
     * @return RefTagsInfrastructure
     */
    public function setFlOrder($flOrder)
    {
        $this->flOrder = $flOrder;
    
        return $this;
    }

    /**
     * Get flOrder
     *
     * @return boolean 
     */
    public function getFlOrder()
    {
        return $this->flOrder;
    }

    /**
     * Set gisRubrics
     *
     * @param string $gisRubrics
     * @return RefTagsInfrastructure
     */
    public function setGisRubrics($gisRubrics)
    {
        $this->gisRubrics = $gisRubrics;
    
        return $this;
    }

    /**
     * Get gisRubrics
     *
     * @return string 
     */
    public function getGisRubrics()
    {
        return $this->gisRubrics;
    }

    /**
     * Set gisPages
     *
     * @param string $gisPages
     * @return RefTagsInfrastructure
     */
    public function setGisPages($gisPages)
    {
        $this->gisPages = $gisPages;
    
        return $this;
    }

    /**
     * Get gisPages
     *
     * @return string 
     */
    public function getGisPages()
    {
        return $this->gisPages;
    }
}