<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfConversionGoal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ConversionGoal[] $ConversionGoal
     */
    protected $ConversionGoal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConversionGoal[]
     */
    public function getConversionGoal()
    {
      return $this->ConversionGoal;
    }

    /**
     * @param ConversionGoal[] $ConversionGoal
     * @return \PMG\BingAds\CampaignManagement\ArrayOfConversionGoal
     */
    public function setConversionGoal(array $ConversionGoal = null)
    {
      $this->ConversionGoal = $ConversionGoal;
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
      return isset($this->ConversionGoal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ConversionGoal
     */
    public function offsetGet($offset)
    {
      return $this->ConversionGoal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ConversionGoal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ConversionGoal[] = $value;
      } else {
        $this->ConversionGoal[$offset] = $value;
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
      unset($this->ConversionGoal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ConversionGoal Return the current element
     */
    public function current()
    {
      return current($this->ConversionGoal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ConversionGoal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ConversionGoal);
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
      reset($this->ConversionGoal);
    }

    /**
     * Countable implementation
     *
     * @return ConversionGoal Return count of elements
     */
    public function count()
    {
      return count($this->ConversionGoal);
    }

}
