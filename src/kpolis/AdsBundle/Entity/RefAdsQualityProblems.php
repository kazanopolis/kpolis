<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\RefAdsQualityProblems
 *
 * @ORM\Table(name="ref_ads_quality_problems")
 * @ORM\Entity
 */
class RefAdsQualityProblems
{
    /**
     * @var boolean $problemId
     *
     * @ORM\Column(name="problem_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $problemId;

    /**
     * @var string $problemName
     *
     * @ORM\Column(name="problem_name", type="string", length=50, nullable=true)
     */
    private $problemName;

    /**
     * @var boolean $problemGroup
     *
     * @ORM\Column(name="problem_group", type="boolean", nullable=false)
     */
    private $problemGroup;



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
     * Set problemName
     *
     * @param string $problemName
     * @return RefAdsQualityProblems
     */
    public function setProblemName($problemName)
    {
        $this->problemName = $problemName;
    
        return $this;
    }

    /**
     * Get problemName
     *
     * @return string 
     */
    public function getProblemName()
    {
        return $this->problemName;
    }

    /**
     * Set problemGroup
     *
     * @param boolean $problemGroup
     * @return RefAdsQualityProblems
     */
    public function setProblemGroup($problemGroup)
    {
        $this->problemGroup = $problemGroup;
    
        return $this;
    }

    /**
     * Get problemGroup
     *
     * @return boolean 
     */
    public function getProblemGroup()
    {
        return $this->problemGroup;
    }
}