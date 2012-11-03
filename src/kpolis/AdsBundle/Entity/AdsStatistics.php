<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\AdsStatistics
 *
 * @ORM\Table(name="ads_statistics")
 * @ORM\Entity
 */
class AdsStatistics
{
    /**
     * @var integer $statId
     *
     * @ORM\Column(name="stat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statId;

    /**
     * @var boolean $entityType
     *
     * @ORM\Column(name="entity_type", type="boolean", nullable=false)
     */
    private $entityType;

    /**
     * @var integer $entityId
     *
     * @ORM\Column(name="entity_id", type="integer", nullable=false)
     */
    private $entityId;

    /**
     * @var boolean $paramType
     *
     * @ORM\Column(name="param_type", type="boolean", nullable=false)
     */
    private $paramType;

    /**
     * @var integer $paramSum
     *
     * @ORM\Column(name="param_sum", type="bigint", nullable=false)
     */
    private $paramSum;

    /**
     * @var integer $paramCount
     *
     * @ORM\Column(name="param_count", type="smallint", nullable=false)
     */
    private $paramCount;

    /**
     * @var float $paramAverage
     *
     * @ORM\Column(name="param_average", type="float", nullable=false)
     */
    private $paramAverage;

    /**
     * @var float $paramMin
     *
     * @ORM\Column(name="param_min", type="float", nullable=true)
     */
    private $paramMin;

    /**
     * @var float $paramMax
     *
     * @ORM\Column(name="param_max", type="float", nullable=true)
     */
    private $paramMax;



    /**
     * Get statId
     *
     * @return integer 
     */
    public function getStatId()
    {
        return $this->statId;
    }

    /**
     * Set entityType
     *
     * @param boolean $entityType
     * @return AdsStatistics
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    
        return $this;
    }

    /**
     * Get entityType
     *
     * @return boolean 
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set entityId
     *
     * @param integer $entityId
     * @return AdsStatistics
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    
        return $this;
    }

    /**
     * Get entityId
     *
     * @return integer 
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Set paramType
     *
     * @param boolean $paramType
     * @return AdsStatistics
     */
    public function setParamType($paramType)
    {
        $this->paramType = $paramType;
    
        return $this;
    }

    /**
     * Get paramType
     *
     * @return boolean 
     */
    public function getParamType()
    {
        return $this->paramType;
    }

    /**
     * Set paramSum
     *
     * @param integer $paramSum
     * @return AdsStatistics
     */
    public function setParamSum($paramSum)
    {
        $this->paramSum = $paramSum;
    
        return $this;
    }

    /**
     * Get paramSum
     *
     * @return integer 
     */
    public function getParamSum()
    {
        return $this->paramSum;
    }

    /**
     * Set paramCount
     *
     * @param integer $paramCount
     * @return AdsStatistics
     */
    public function setParamCount($paramCount)
    {
        $this->paramCount = $paramCount;
    
        return $this;
    }

    /**
     * Get paramCount
     *
     * @return integer 
     */
    public function getParamCount()
    {
        return $this->paramCount;
    }

    /**
     * Set paramAverage
     *
     * @param float $paramAverage
     * @return AdsStatistics
     */
    public function setParamAverage($paramAverage)
    {
        $this->paramAverage = $paramAverage;
    
        return $this;
    }

    /**
     * Get paramAverage
     *
     * @return float 
     */
    public function getParamAverage()
    {
        return $this->paramAverage;
    }

    /**
     * Set paramMin
     *
     * @param float $paramMin
     * @return AdsStatistics
     */
    public function setParamMin($paramMin)
    {
        $this->paramMin = $paramMin;
    
        return $this;
    }

    /**
     * Get paramMin
     *
     * @return float 
     */
    public function getParamMin()
    {
        return $this->paramMin;
    }

    /**
     * Set paramMax
     *
     * @param float $paramMax
     * @return AdsStatistics
     */
    public function setParamMax($paramMax)
    {
        $this->paramMax = $paramMax;
    
        return $this;
    }

    /**
     * Get paramMax
     *
     * @return float 
     */
    public function getParamMax()
    {
        return $this->paramMax;
    }
}