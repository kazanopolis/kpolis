<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\NewsRawSources
 *
 * @ORM\Table(name="news_raw_sources")
 * @ORM\Entity
 */
class NewsRawSources
{
    /**
     * @var integer $sourceId
     *
     * @ORM\Column(name="source_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sourceId;

    /**
     * @var string $sourceUrl
     *
     * @ORM\Column(name="source_url", type="text", nullable=true)
     */
    private $sourceUrl;

    /**
     * @var integer $lastTime
     *
     * @ORM\Column(name="last_time", type="integer", nullable=false)
     */
    private $lastTime;

    /**
     * @var integer $nextTime
     *
     * @ORM\Column(name="next_time", type="integer", nullable=false)
     */
    private $nextTime;

    /**
     * @var integer $period
     *
     * @ORM\Column(name="period", type="integer", nullable=false)
     */
    private $period;



    /**
     * Get sourceId
     *
     * @return integer 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set sourceUrl
     *
     * @param string $sourceUrl
     * @return NewsRawSources
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
     * Set lastTime
     *
     * @param integer $lastTime
     * @return NewsRawSources
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;
    
        return $this;
    }

    /**
     * Get lastTime
     *
     * @return integer 
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }

    /**
     * Set nextTime
     *
     * @param integer $nextTime
     * @return NewsRawSources
     */
    public function setNextTime($nextTime)
    {
        $this->nextTime = $nextTime;
    
        return $this;
    }

    /**
     * Get nextTime
     *
     * @return integer 
     */
    public function getNextTime()
    {
        return $this->nextTime;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return NewsRawSources
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    
        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }
}