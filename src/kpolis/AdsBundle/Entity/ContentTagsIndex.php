<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ContentTagsIndex
 *
 * @ORM\Table(name="content_tags_index")
 * @ORM\Entity
 */
class ContentTagsIndex
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
     * @var string $tagName
     *
     * @ORM\Column(name="tag_name", type="string", length=100, nullable=true)
     */
    private $tagName;

    /**
     * @var integer $tagGroupId
     *
     * @ORM\Column(name="tag_group_id", type="smallint", nullable=false)
     */
    private $tagGroupId;

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
     * Set tagName
     *
     * @param string $tagName
     * @return ContentTagsIndex
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
     * Set tagGroupId
     *
     * @param integer $tagGroupId
     * @return ContentTagsIndex
     */
    public function setTagGroupId($tagGroupId)
    {
        $this->tagGroupId = $tagGroupId;
    
        return $this;
    }

    /**
     * Get tagGroupId
     *
     * @return integer 
     */
    public function getTagGroupId()
    {
        return $this->tagGroupId;
    }

    /**
     * Set tagUrl
     *
     * @param string $tagUrl
     * @return ContentTagsIndex
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