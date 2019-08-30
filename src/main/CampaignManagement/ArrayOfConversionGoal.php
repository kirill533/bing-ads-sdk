<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfConversionGoal implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ConversionGoal[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ConversionGoal);
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

    /**
     * Change the current array with another
     *
     * @return ConversionGoal[]|null The previous array if present
     */
    public function exchangeArray(array $ConversionGoal)
    {
        $prev = $this->ConversionGoal;
        $this->ConversionGoal = $ConversionGoal;
        return $prev;
    }

}
