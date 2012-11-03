<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\TmpPagesVdr
 *
 * @ORM\Table(name="tmp_pages_vdr")
 * @ORM\Entity
 */
class TmpPagesVdr
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
     * @var integer $houseId
     *
     * @ORM\Column(name="house_id", type="integer", nullable=false)
     */
    private $houseId;

    /**
     * @var string $html
     *
     * @ORM\Column(name="html", type="text", nullable=true)
     */
    private $html;

    /**
     * @var boolean $flStatus
     *
     * @ORM\Column(name="fl_status", type="boolean", nullable=false)
     */
    private $flStatus;



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
     * Set houseId
     *
     * @param integer $houseId
     * @return TmpPagesVdr
     */
    public function setHouseId($houseId)
    {
        $this->houseId = $houseId;
    
        return $this;
    }

    /**
     * Get houseId
     *
     * @return integer 
     */
    public function getHouseId()
    {
        return $this->houseId;
    }

    /**
     * Set html
     *
     * @param string $html
     * @return TmpPagesVdr
     */
    public function setHtml($html)
    {
        $this->html = $html;
    
        return $this;
    }

    /**
     * Get html
     *
     * @return string 
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set flStatus
     *
     * @param boolean $flStatus
     * @return TmpPagesVdr
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
}