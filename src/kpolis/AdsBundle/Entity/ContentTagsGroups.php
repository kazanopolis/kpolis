<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ContentTagsGroups
 *
 * @ORM\Table(name="content_tags_groups")
 * @ORM\Entity
 */
class ContentTagsGroups
{
    /**
     * @var integer $tagGroupId
     *
     * @ORM\Column(name="tag_group_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagGroupId;

    /**
     * @var string $tagGroupName
     *
     * @ORM\Column(name="tag_group_name", type="string", length=20, nullable=true)
     */
    private $tagGroupName;



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
     * Set tagGroupName
     *
     * @param string $tagGroupName
     * @return ContentTagsGroups
     */
    public function setTagGroupName($tagGroupName)
    {
        $this->tagGroupName = $tagGroupName;
    
        return $this;
    }

    /**
     * Get tagGroupName
     *
     * @return string 
     */
    public function getTagGroupName()
    {
        return $this->tagGroupName;
    }
}