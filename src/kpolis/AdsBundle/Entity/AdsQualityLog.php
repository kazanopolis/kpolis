<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AdsQualityLog
 *
 * @ORM\Table(name="ads_quality_log")
 * @ORM\Entity
 */
class AdsQualityLog
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
     * @var integer $adId
     *
     * @ORM\Column(name="ad_id", type="integer", nullable=false)
     */
    private $adId;

    /**
     * @var boolean $problemId
     *
     * @ORM\Column(name="problem_id", type="boolean", nullable=false)
     */
    private $problemId;

    /**
     * @var integer $merchantId
     *
     * @ORM\Column(name="merchant_id", type="integer", nullable=false)
     */
    private $merchantId;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false)
     */
    private $createDate;

    /**
     * @var string $addText
     *
     * @ORM\Column(name="add_text", type="string", length=255, nullable=true)
     */
    private $addText;

    /**
     * @var string $action
     *
     * @ORM\Column(name="action", type="string", length=20, nullable=true)
     */
    private $action;



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
     * Set adId
     *
     * @param integer $adId
     * @return AdsQualityLog
     */
    public function setAdId($adId)
    {
        $this->adId = $adId;
    
        return $this;
    }

    /**
     * Get adId
     *
     * @return integer 
     */
    public function getAdId()
    {
        return $this->adId;
    }

    /**
     * Set problemId
     *
     * @param boolean $problemId
     * @return AdsQualityLog
     */
    public function setProblemId($problemId)
    {
        $this->problemId = $problemId;
    
        return $this;
    }

    /**
     * Get problemId
     *
     * @return boolean 
     */
    public function getProblemId()
    {
        return $this->problemId;
    }

    /**
     * Set merchantId
     *
     * @param integer $merchantId
     * @return AdsQualityLog
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    
        return $this;
    }

    /**
     * Get merchantId
     *
     * @return integer 
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return AdsQualityLog
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
     * Set addText
     *
     * @param string $addText
     * @return AdsQualityLog
     */
    public function setAddText($addText)
    {
        $this->addText = $addText;
    
        return $this;
    }

    /**
     * Get addText
     *
     * @return string 
     */
    public function getAddText()
    {
        return $this->addText;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return AdsQualityLog
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }
}