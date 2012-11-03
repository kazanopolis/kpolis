<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefTagsAdsDublicates
 *
 * @ORM\Table(name="ref_tags_ads_dublicates")
 * @ORM\Entity
 */
class RefTagsAdsDublicates
{
    /**
     * @var integer $wordId
     *
     * @ORM\Column(name="word_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wordId;

    /**
     * @var string $tagDublName
     *
     * @ORM\Column(name="tag_dubl_name", type="string", length=50, nullable=true)
     */
    private $tagDublName;

    /**
     * @var integer $wordCount
     *
     * @ORM\Column(name="word_count", type="smallint", nullable=false)
     */
    private $wordCount;

    /**
     * @var boolean $tagId
     *
     * @ORM\Column(name="tag_id", type="boolean", nullable=false)
     */
    private $tagId;

    /**
     * @var integer $withTagId
     *
     * @ORM\Column(name="with_tag_id", type="smallint", nullable=false)
     */
    private $withTagId;



    /**
     * Get wordId
     *
     * @return integer 
     */
    public function getWordId()
    {
        return $this->wordId;
    }

    /**
     * Set tagDublName
     *
     * @param string $tagDublName
     * @return RefTagsAdsDublicates
     */
    public function setTagDublName($tagDublName)
    {
        $this->tagDublName = $tagDublName;
    
        return $this;
    }

    /**
     * Get tagDublName
     *
     * @return string 
     */
    public function getTagDublName()
    {
        return $this->tagDublName;
    }

    /**
     * Set wordCount
     *
     * @param integer $wordCount
     * @return RefTagsAdsDublicates
     */
    public function setWordCount($wordCount)
    {
        $this->wordCount = $wordCount;
    
        return $this;
    }

    /**
     * Get wordCount
     *
     * @return integer 
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * Set tagId
     *
     * @param boolean $tagId
     * @return RefTagsAdsDublicates
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
    
        return $this;
    }

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
     * Set withTagId
     *
     * @param integer $withTagId
     * @return RefTagsAdsDublicates
     */
    public function setWithTagId($withTagId)
    {
        $this->withTagId = $withTagId;
    
        return $this;
    }

    /**
     * Get withTagId
     *
     * @return integer 
     */
    public function getWithTagId()
    {
        return $this->withTagId;
    }
}