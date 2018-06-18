<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfDayTime implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfDayTime
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
     * Iterator implementation
     *
     * @return DayTime Return the current element
     */
    public function current()
    {
      return current($this->DayTime);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DayTime);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DayTime);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DayTime);
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

}
