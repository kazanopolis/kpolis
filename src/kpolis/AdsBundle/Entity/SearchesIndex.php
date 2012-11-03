<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\SearchesIndex
 *
 * @ORM\Table(name="searches_index")
 * @ORM\Entity
 */
class SearchesIndex
{
    /**
     * @var integer $searchId
     *
     * @ORM\Column(name="search_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $searchId;

    /**
     * @var string $searchData
     *
     * @ORM\Column(name="search_data", type="text", nullable=true)
     */
    private $searchData;

    /**
     * @var string $searchRaw
     *
     * @ORM\Column(name="search_raw", type="text", nullable=true)
     */
    private $searchRaw;

    /**
     * @var string $searchUrl
     *
     * @ORM\Column(name="search_url", type="string", length=100, nullable=true)
     */
    private $searchUrl;

    /**
     * @var string $searchHash
     *
     * @ORM\Column(name="search_hash", type="string", length=32, nullable=true)
     */
    private $searchHash;

    /**
     * @var integer $searchCount
     *
     * @ORM\Column(name="search_count", type="integer", nullable=false)
     */
    private $searchCount;

    /**
     * @var integer $createDate
     *
     * @ORM\Column(name="create_date", type="integer", nullable=false)
     */
    private $createDate;



    /**
     * Get searchId
     *
     * @return integer 
     */
    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * Set searchData
     *
     * @param string $searchData
     * @return SearchesIndex
     */
    public function setSearchData($searchData)
    {
        $this->searchData = $searchData;
    
        return $this;
    }

    /**
     * Get searchData
     *
     * @return string 
     */
    public function getSearchData()
    {
        return $this->searchData;
    }

    /**
     * Set searchRaw
     *
     * @param string $searchRaw
     * @return SearchesIndex
     */
    public function setSearchRaw($searchRaw)
    {
        $this->searchRaw = $searchRaw;
    
        return $this;
    }

    /**
     * Get searchRaw
     *
     * @return string 
     */
    public function getSearchRaw()
    {
        return $this->searchRaw;
    }

    /**
     * Set searchUrl
     *
     * @param string $searchUrl
     * @return SearchesIndex
     */
    public function setSearchUrl($searchUrl)
    {
        $this->searchUrl = $searchUrl;
    
        return $this;
    }

    /**
     * Get searchUrl
     *
     * @return string 
     */
    public function getSearchUrl()
    {
        return $this->searchUrl;
    }

    /**
     * Set searchHash
     *
     * @param string $searchHash
     * @return SearchesIndex
     */
    public function setSearchHash($searchHash)
    {
        $this->searchHash = $searchHash;
    
        return $this;
    }

    /**
     * Get searchHash
     *
     * @return string 
     */
    public function getSearchHash()
    {
        return $this->searchHash;
    }

    /**
     * Set searchCount
     *
     * @param integer $searchCount
     * @return SearchesIndex
     */
    public function setSearchCount($searchCount)
    {
        $this->searchCount = $searchCount;
    
        return $this;
    }

    /**
     * Get searchCount
     *
     * @return integer 
     */
    public function getSearchCount()
    {
        return $this->searchCount;
    }

    /**
     * Set createDate
     *
     * @param integer $createDate
     * @return SearchesIndex
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
}