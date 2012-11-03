<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ContentSections
 *
 * @ORM\Table(name="content_sections")
 * @ORM\Entity
 */
class ContentSections
{
    /**
     * @var boolean $sectionId
     *
     * @ORM\Column(name="section_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sectionId;

    /**
     * @var string $sectionName
     *
     * @ORM\Column(name="section_name", type="string", length=50, nullable=true)
     */
    private $sectionName;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var boolean $flHidden
     *
     * @ORM\Column(name="fl_hidden", type="boolean", nullable=false)
     */
    private $flHidden;

    /**
     * @var boolean $flShared
     *
     * @ORM\Column(name="fl_shared", type="boolean", nullable=false)
     */
    private $flShared;



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
     * Set sectionName
     *
     * @param string $sectionName
     * @return ContentSections
     */
    public function setSectionName($sectionName)
    {
        $this->sectionName = $sectionName;
    
        return $this;
    }

    /**
     * Get sectionName
     *
     * @return string 
     */
    public function getSectionName()
    {
        return $this->sectionName;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return ContentSections
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set flHidden
     *
     * @param boolean $flHidden
     * @return ContentSections
     */
    public function setFlHidden($flHidden)
    {
        $this->flHidden = $flHidden;
    
        return $this;
    }

    /**
     * Get flHidden
     *
     * @return boolean 
     */
    public function getFlHidden()
    {
        return $this->flHidden;
    }

    /**
     * Set flShared
     *
     * @param boolean $flShared
     * @return ContentSections
     */
    public function setFlShared($flShared)
    {
        $this->flShared = $flShared;
    
        return $this;
    }

    /**
     * Get flShared
     *
     * @return boolean 
     */
    public function getFlShared()
    {
        return $this->flShared;
    }
}