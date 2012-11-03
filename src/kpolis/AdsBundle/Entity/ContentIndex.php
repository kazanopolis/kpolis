<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\ContentIndex
 *
 * @ORM\Table(name="content_index")
 * @ORM\Entity
 */
class ContentIndex
{
    /**
     * @var integer $itemId
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemId;

    /**
     * @var string $itemCaption
     *
     * @ORM\Column(name="item_caption", type="string", length=150, nullable=true)
     */
    private $itemCaption;

    /**
     * @var boolean $sectionId
     *
     * @ORM\Column(name="section_id", type="boolean", nullable=true)
     */
    private $sectionId;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=true)
     */
    private $createDate;

    /**
     * @var string $itemContent
     *
     * @ORM\Column(name="item_content", type="text", nullable=true)
     */
    private $itemContent;

    /**
     * @var string $itemPreview
     *
     * @ORM\Column(name="item_preview", type="text", nullable=true)
     */
    private $itemPreview;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var string $itemTitle
     *
     * @ORM\Column(name="item_title", type="string", length=100, nullable=true)
     */
    private $itemTitle;

    /**
     * @var string $itemDescription
     *
     * @ORM\Column(name="item_description", type="string", length=250, nullable=true)
     */
    private $itemDescription;

    /**
     * @var string $itemSourceUrl
     *
     * @ORM\Column(name="item_source_url", type="string", length=255, nullable=true)
     */
    private $itemSourceUrl;

    /**
     * @var string $itemSourceText
     *
     * @ORM\Column(name="item_source_text", type="text", nullable=true)
     */
    private $itemSourceText;



    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set itemCaption
     *
     * @param string $itemCaption
     * @return ContentIndex
     */
    public function setItemCaption($itemCaption)
    {
        $this->itemCaption = $itemCaption;
    
        return $this;
    }

    /**
     * Get itemCaption
     *
     * @return string 
     */
    public function getItemCaption()
    {
        return $this->itemCaption;
    }

    /**
     * Set sectionId
     *
     * @param boolean $sectionId
     * @return ContentIndex
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
     * Set userId
     *
     * @param integer $userId
     * @return ContentIndex
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
     * Set createDate
     *
     * @param integer $createDate
     * @return ContentIndex
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return integer 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set itemContent
     *
     * @param string $itemContent
     * @return ContentIndex
     */
    public function setItemContent($itemContent)
    {
        $this->itemContent = $itemContent;
    
        return $this;
    }

    /**
     * Get itemContent
     *
     * @return string 
     */
    public function getItemContent()
    {
        return $this->itemContent;
    }

    /**
     * Set itemPreview
     *
     * @param string $itemPreview
     * @return ContentIndex
     */
    public function setItemPreview($itemPreview)
    {
        $this->itemPreview = $itemPreview;
    
        return $this;
    }

    /**
     * Get itemPreview
     *
     * @return string 
     */
    public function getItemPreview()
    {
        return $this->itemPreview;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return ContentIndex
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
     * Set itemTitle
     *
     * @param string $itemTitle
     * @return ContentIndex
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
    
        return $this;
    }

    /**
     * Get itemTitle
     *
     * @return string 
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Set itemDescription
     *
     * @param string $itemDescription
     * @return ContentIndex
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    
        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string 
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Set itemSourceUrl
     *
     * @param string $itemSourceUrl
     * @return ContentIndex
     */
    public function setItemSourceUrl($itemSourceUrl)
    {
        $this->itemSourceUrl = $itemSourceUrl;
    
        return $this;
    }

    /**
     * Get itemSourceUrl
     *
     * @return string 
     */
    public function getItemSourceUrl()
    {
        return $this->itemSourceUrl;
    }

    /**
     * Set itemSourceText
     *
     * @param string $itemSourceText
     * @return ContentIndex
     */
    public function setItemSourceText($itemSourceText)
    {
        $this->itemSourceText = $itemSourceText;
    
        return $this;
    }

    /**
     * Get itemSourceText
     *
     * @return string 
     */
    public function getItemSourceText()
    {
        return $this->itemSourceText;
    }
}