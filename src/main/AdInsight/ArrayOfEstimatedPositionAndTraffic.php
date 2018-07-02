<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfEstimatedPositionAndTraffic implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EstimatedPositionAndTraffic[] $EstimatedPositionAndTraffic
     */
    protected $EstimatedPositionAndTraffic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstimatedPositionAndTraffic[]
     */
    public function getEstimatedPositionAndTraffic()
    {
      return $this->EstimatedPositionAndTraffic;
    }

    /**
     * @param EstimatedPositionAndTraffic[] $EstimatedPositionAndTraffic
     * @return \PMG\BingAds\AdInsight\ArrayOfEstimatedPositionAndTraffic
     */
    public function setEstimatedPositionAndTraffic(array $EstimatedPositionAndTraffic = null)
    {
      $this->EstimatedPositionAndTraffic = $EstimatedPositionAndTraffic;
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
      return isset($this->EstimatedPositionAndTraffic[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EstimatedPositionAndTraffic
     */
    public function offsetGet($offset)
    {
      return $this->EstimatedPositionAndTraffic[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EstimatedPositionAndTraffic $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EstimatedPositionAndTraffic[] = $value;
      } else {
        $this->EstimatedPositionAndTraffic[$offset] = $value;
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
      unset($this->EstimatedPositionAndTraffic[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EstimatedPositionAndTraffic Return the current element
     */
    public function current()
    {
      return current($this->EstimatedPositionAndTraffic);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EstimatedPositionAndTraffic);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EstimatedPositionAndTraffic);
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
      reset($this->EstimatedPositionAndTraffic);
    }

    /**
     * Countable implementation
     *
     * @return EstimatedPositionAndTraffic Return count of elements
     */
    public function count()
    {
      return count($this->EstimatedPositionAndTraffic);
    }

}
