<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefTagsContent
 *
 * @ORM\Table(name="ref_tags_content")
 * @ORM\Entity
 */
class RefTagsContent
{
    /**
     * @var integer $tagId
     *
     * @ORM\Column(name="tag_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagId;

    /**
     * @var boolean $tagType
     *
     * @ORM\Column(name="tag_type", type="boolean", nullable=false)
     */
    private $tagType;

    /**
     * @var string $tagName
     *
     * @ORM\Column(name="tag_name", type="string", length=100, nullable=true)
     */
    private $tagName;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var boolean $sectionId
     *
     * @ORM\Column(name="section_id", type="boolean", nullable=true)
     */
    private $sectionId;

    /**
     * @var string $tagUrl
     *
     * @ORM\Column(name="tag_url", type="string", length=50, nullable=true)
     */
    private $tagUrl;



    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set tagType
     *
     * @param boolean $tagType
     * @return RefTagsContent
     */
    public function setTagType($tagType)
    {
        $this->tagType = $tagType;
    
        return $this;
    }

    /**
     * Get tagType
     *
     * @return boolean 
     */
    public function getTagType()
    {
        return $this->tagType;
    }

    /**
     * Set tagName
     *
     * @param string $tagName
     * @return RefTagsContent
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
     * Set parentId
     *
     * @param integer $parentId
     * @return RefTagsContent
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return RefTagsContent
     */
    public function setFlStatus($flStatus)
    {
        $this->flStatus = $flStatus;
    
        return $this;
    }

    /**
     * Get flStatus
     *
     * @return boolean 
     */
    public function getFlStatus()
    {
        return $this->flStatus;
    }

    /**
     * Set sectionId
     *
     * @param boolean $sectionId
     * @return RefTagsContent
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
    
        return $this;
    }

    /**
     * Get sectionId
     *
     * @return boolean 
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set tagUrl
     *
     * @param string $tagUrl
     * @return RefTagsContent
     */
    public function setTagUrl($tagUrl)
    {
        $this->tagUrl = $tagUrl;
    
        return $this;
    }

    /**
     * Get tagUrl
     *
     * @return string 
     */
    public function getTagUrl()
    {
        return $this->tagUrl;
    }
}