<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\NewsRawData
 *
 * @ORM\Table(name="news_raw_data")
 * @ORM\Entity
 */
class NewsRawData
{
    /**
     * @var integer $documentId
     *
     * @ORM\Column(name="document_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $documentId;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean $sourceId
     *
     * @ORM\Column(name="source_id", type="boolean", nullable=false)
     */
    private $sourceId;

    /**
     * @var integer $documentDate
     *
     * @ORM\Column(name="document_date", type="integer", nullable=true)
     */
    private $documentDate;

    /**
     * @var integer $parseDate
     *
     * @ORM\Column(name="parse_date", type="integer", nullable=false)
     */
    private $parseDate;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;

    /**
     * @var string $sourceUrl
     *
     * @ORM\Column(name="source_url", type="text", nullable=true)
     */
    private $sourceUrl;

    /**
     * @var string $rawHtml
     *
     * @ORM\Column(name="raw_html", type="text", nullable=true)
     */
    private $rawHtml;

    /**
     * @var string $documentText
     *
     * @ORM\Column(name="document_text", type="text", nullable=true)
     */
    private $documentText;



    /**
     * Get documentId
     *
     * @return integer 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return NewsRawData
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sourceId
     *
     * @param boolean $sourceId
     * @return NewsRawData
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    
        return $this;
    }

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
     * Set documentDate
     *
     * @param integer $documentDate
     * @return NewsRawData
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;
    
        return $this;
    }

    /**
     * Get documentDate
     *
     * @return integer 
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Set parseDate
     *
     * @param integer $parseDate
     * @return NewsRawData
     */
    public function setParseDate($parseDate)
    {
        $this->parseDate = $parseDate;
    
        return $this;
    }

    /**
     * Get parseDate
     *
     * @return integer 
     */
    public function getParseDate()
    {
        return $this->parseDate;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return NewsRawData
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
     * Set sourceUrl
     *
     * @param string $sourceUrl
     * @return NewsRawData
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
     * Set rawHtml
     *
     * @param string $rawHtml
     * @return NewsRawData
     */
    public function setRawHtml($rawHtml)
    {
        $this->rawHtml = $rawHtml;
    
        return $this;
    }

    /**
     * Get rawHtml
     *
     * @return string 
     */
    public function getRawHtml()
    {
        return $this->rawHtml;
    }

    /**
     * Set documentText
     *
     * @param string $documentText
     * @return NewsRawData
     */
    public function setDocumentText($documentText)
    {
        $this->documentText = $documentText;
    
        return $this;
    }

    /**
     * Get documentText
     *
     * @return string 
     */
    public function getDocumentText()
    {
        return $this->documentText;
    }
}