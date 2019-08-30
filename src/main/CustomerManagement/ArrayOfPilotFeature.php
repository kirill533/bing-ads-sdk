<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfPilotFeature implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var PilotFeature[] $PilotFeature
     */
    protected $PilotFeature = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PilotFeature[]
     */
    public function getPilotFeature()
    {
        return $this->PilotFeature;
    }

    /**
     * @param PilotFeature[] $PilotFeature
     * @return \PMG\BingAds\CustomerManagement\ArrayOfPilotFeature
     */
    public function setPilotFeature(array $PilotFeature = null)
    {
        $this->PilotFeature = $PilotFeature;
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
      return isset($this->PilotFeature[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PilotFeature
     */
    public function offsetGet($offset)
    {
      return $this->PilotFeature[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PilotFeature $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PilotFeature[] = $value;
      } else {
        $this->PilotFeature[$offset] = $value;
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
      unset($this->PilotFeature[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return PilotFeature[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->PilotFeature);
    }

    /**
     * Countable implementation
     *
     * @return PilotFeature Return count of elements
     */
    public function count()
    {
      return count($this->PilotFeature);
    }

    /**
     * Change the current array with another
     *
     * @return PilotFeature[]|null The previous array if present
     */
    public function exchangeArray(array $PilotFeature)
    {
        $prev = $this->PilotFeature;
        $this->PilotFeature = $PilotFeature;
        return $prev;
    }

}
