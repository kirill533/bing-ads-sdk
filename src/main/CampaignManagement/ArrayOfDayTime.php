<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfDayTime implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var DayTime[] $DayTime
     */
    protected $DayTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DayTime[]
     */
    public function getDayTime()
    {
        return $this->DayTime;
    }

    /**
     * @param DayTime[] $DayTime
     * @return \PMG\BingAds\CampaignManagement\ArrayOfDayTime
     */
    public function setDayTime(array $DayTime = null)
    {
        $this->DayTime = $DayTime;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DayTime[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DayTime
     */
    public function offsetGet($offset)
    {
      return $this->DayTime[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DayTime $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DayTime[] = $value;
      } else {
        $this->DayTime[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DayTime[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return DayTime[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DayTime);
    }

    /**
     * Countable implementation
     *
     * @return DayTime Return count of elements
     */
    public function count()
    {
      return count($this->DayTime);
    }

    /**
     * Change the current array with another
     *
     * @return DayTime[]|null The previous array if present
     */
    public function exchangeArray(array $DayTime)
    {
        $prev = $this->DayTime;
        $this->DayTime = $DayTime;
        return $prev;
    }

}
