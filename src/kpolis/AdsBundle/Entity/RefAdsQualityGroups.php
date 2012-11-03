<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefAdsQualityGroups
 *
 * @ORM\Table(name="ref_ads_quality_groups")
 * @ORM\Entity
 */
class RefAdsQualityGroups
{
    /**
     * @var boolean $groupId
     *
     * @ORM\Column(name="group_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;

    /**
     * @var string $groupName
     *
     * @ORM\Column(name="group_name", type="string", length=50, nullable=true)
     */
    private $groupName;



    /**
     * Get groupId
     *
     * @return boolean 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     * @return RefAdsQualityGroups
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    
        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
}