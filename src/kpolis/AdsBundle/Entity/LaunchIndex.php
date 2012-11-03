<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\LaunchIndex
 *
 * @ORM\Table(name="launch_index")
 * @ORM\Entity
 */
class LaunchIndex
{
    /**
     * @var integer $launchId
     *
     * @ORM\Column(name="launch_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $launchId;

    /**
     * @var string $launchName
     *
     * @ORM\Column(name="launch_name", type="string", length=255, nullable=false)
     */
    private $launchName;

    /**
     * @var integer $launchLastTime
     *
     * @ORM\Column(name="launch_last_time", type="integer", nullable=false)
     */
    private $launchLastTime;

    /**
     * @var integer $launchNextTime
     *
     * @ORM\Column(name="launch_next_time", type="integer", nullable=false)
     */
    private $launchNextTime;

    /**
     * @var integer $launchPeriodLarge
     *
     * @ORM\Column(name="launch_period_large", type="integer", nullable=false)
     */
    private $launchPeriodLarge;

    /**
     * @var integer $launchPeriodSmall
     *
     * @ORM\Column(name="launch_period_small", type="integer", nullable=false)
     */
    private $launchPeriodSmall;

    /**
     * @var boolean $launchMode
     *
     * @ORM\Column(name="launch_mode", type="boolean", nullable=false)
     */
    private $launchMode;



    /**
     * Get launchId
     *
     * @return integer 
     */
    public function getLaunchId()
    {
        return $this->launchId;
    }

    /**
     * Set launchName
     *
     * @param string $launchName
     * @return LaunchIndex
     */
    public function setLaunchName($launchName)
    {
        $this->launchName = $launchName;
    
        return $this;
    }

    /**
     * Get launchName
     *
     * @return string 
     */
    public function getLaunchName()
    {
        return $this->launchName;
    }

    /**
     * Set launchLastTime
     *
     * @param integer $launchLastTime
     * @return LaunchIndex
     */
    public function setLaunchLastTime($launchLastTime)
    {
        $this->launchLastTime = $launchLastTime;
    
        return $this;
    }

    /**
     * Get launchLastTime
     *
     * @return integer 
     */
    public function getLaunchLastTime()
    {
        return $this->launchLastTime;
    }

    /**
     * Set launchNextTime
     *
     * @param integer $launchNextTime
     * @return LaunchIndex
     */
    public function setLaunchNextTime($launchNextTime)
    {
        $this->launchNextTime = $launchNextTime;
    
        return $this;
    }

    /**
     * Get launchNextTime
     *
     * @return integer 
     */
    public function getLaunchNextTime()
    {
        return $this->launchNextTime;
    }

    /**
     * Set launchPeriodLarge
     *
     * @param integer $launchPeriodLarge
     * @return LaunchIndex
     */
    public function setLaunchPeriodLarge($launchPeriodLarge)
    {
        $this->launchPeriodLarge = $launchPeriodLarge;
    
        return $this;
    }

    /**
     * Get launchPeriodLarge
     *
     * @return integer 
     */
    public function getLaunchPeriodLarge()
    {
        return $this->launchPeriodLarge;
    }

    /**
     * Set launchPeriodSmall
     *
     * @param integer $launchPeriodSmall
     * @return LaunchIndex
     */
    public function setLaunchPeriodSmall($launchPeriodSmall)
    {
        $this->launchPeriodSmall = $launchPeriodSmall;
    
        return $this;
    }

    /**
     * Get launchPeriodSmall
     *
     * @return integer 
     */
    public function getLaunchPeriodSmall()
    {
        return $this->launchPeriodSmall;
    }

    /**
     * Set launchMode
     *
     * @param boolean $launchMode
     * @return LaunchIndex
     */
    public function setLaunchMode($launchMode)
    {
        $this->launchMode = $launchMode;
    
        return $this;
    }

    /**
     * Get launchMode
     *
     * @return boolean 
     */
    public function getLaunchMode()
    {
        return $this->launchMode;
    }
}