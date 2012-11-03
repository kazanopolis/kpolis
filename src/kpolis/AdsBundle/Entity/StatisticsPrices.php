<?php

namespace kpolis\AdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kpolis\AdsBundle\Entity\StatisticsPrices
 *
 * @ORM\Table(name="statistics_prices")
 * @ORM\Entity
 */
class StatisticsPrices
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
     * @var string $itemType
     *
     * @ORM\Column(name="item_type", type="string", nullable=false)
     */
    private $itemType;

    /**
     * @var boolean $houseFloors
     *
     * @ORM\Column(name="house_floors", type="boolean", nullable=false)
     */
    private $houseFloors;

    /**
     * @var boolean $objectFloor
     *
     * @ORM\Column(name="object_floor", type="boolean", nullable=false)
     */
    private $objectFloor;

    /**
     * @var boolean $objectRooms
     *
     * @ORM\Column(name="object_rooms", type="boolean", nullable=false)
     */
    private $objectRooms;

    /**
     * @var boolean $adType
     *
     * @ORM\Column(name="ad_type", type="boolean", nullable=false)
     */
    private $adType;

    /**
     * @var boolean $houseType
     *
     * @ORM\Column(name="house_type", type="boolean", nullable=false)
     */
    private $houseType;

    /**
     * @var integer $itemsCount
     *
     * @ORM\Column(name="items_count", type="integer", nullable=false)
     */
    private $itemsCount;

    /**
     * @var integer $itemsAvgPrice
     *
     * @ORM\Column(name="items_avg_price", type="integer", nullable=false)
     */
    private $itemsAvgPrice;



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
     * Set itemType
     *
     * @param string $itemType
     * @return StatisticsPrices
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    
        return $this;
    }

    /**
     * Get itemType
     *
     * @return string 
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set houseFloors
     *
     * @param boolean $houseFloors
     * @return StatisticsPrices
     */
    public function setHouseFloors($houseFloors)
    {
        $this->houseFloors = $houseFloors;
    
        return $this;
    }

    /**
     * Get houseFloors
     *
     * @return boolean 
     */
    public function getHouseFloors()
    {
        return $this->houseFloors;
    }

    /**
     * Set objectFloor
     *
     * @param boolean $objectFloor
     * @return StatisticsPrices
     */
    public function setObjectFloor($objectFloor)
    {
        $this->objectFloor = $objectFloor;
    
        return $this;
    }

    /**
     * Get objectFloor
     *
     * @return boolean 
     */
    public function getObjectFloor()
    {
        return $this->objectFloor;
    }

    /**
     * Set objectRooms
     *
     * @param boolean $objectRooms
     * @return StatisticsPrices
     */
    public function setObjectRooms($objectRooms)
    {
        $this->objectRooms = $objectRooms;
    
        return $this;
    }

    /**
     * Get objectRooms
     *
     * @return boolean 
     */
    public function getObjectRooms()
    {
        return $this->objectRooms;
    }

    /**
     * Set adType
     *
     * @param boolean $adType
     * @return StatisticsPrices
     */
    public function setAdType($adType)
    {
        $this->adType = $adType;
    
        return $this;
    }

    /**
     * Get adType
     *
     * @return boolean 
     */
    public function getAdType()
    {
        return $this->adType;
    }

    /**
     * Set houseType
     *
     * @param boolean $houseType
     * @return StatisticsPrices
     */
    public function setHouseType($houseType)
    {
        $this->houseType = $houseType;
    
        return $this;
    }

    /**
     * Get houseType
     *
     * @return boolean 
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * Set itemsCount
     *
     * @param integer $itemsCount
     * @return StatisticsPrices
     */
    public function setItemsCount($itemsCount)
    {
        $this->itemsCount = $itemsCount;
    
        return $this;
    }

    /**
     * Get itemsCount
     *
     * @return integer 
     */
    public function getItemsCount()
    {
        return $this->itemsCount;
    }

    /**
     * Set itemsAvgPrice
     *
     * @param integer $itemsAvgPrice
     * @return StatisticsPrices
     */
    public function setItemsAvgPrice($itemsAvgPrice)
    {
        $this->itemsAvgPrice = $itemsAvgPrice;
    
        return $this;
    }

    /**
     * Get itemsAvgPrice
     *
     * @return integer 
     */
    public function getItemsAvgPrice()
    {
        return $this->itemsAvgPrice;
    }
}