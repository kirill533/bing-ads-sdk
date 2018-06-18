<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfEstimatedBidAndTraffic implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EstimatedBidAndTraffic[] $EstimatedBidAndTraffic
     */
    protected $EstimatedBidAndTraffic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EstimatedBidAndTraffic[]
     */
    public function getEstimatedBidAndTraffic()
    {
      return $this->EstimatedBidAndTraffic;
    }

    /**
     * @param EstimatedBidAndTraffic[] $EstimatedBidAndTraffic
     * @return \PMG\BingAds\AdInsight\ArrayOfEstimatedBidAndTraffic
     */
    public function setEstimatedBidAndTraffic(array $EstimatedBidAndTraffic = null)
    {
      $this->EstimatedBidAndTraffic = $EstimatedBidAndTraffic;
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
      return isset($this->EstimatedBidAndTraffic[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EstimatedBidAndTraffic
     */
    public function offsetGet($offset)
    {
      return $this->EstimatedBidAndTraffic[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EstimatedBidAndTraffic $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EstimatedBidAndTraffic[] = $value;
      } else {
        $this->EstimatedBidAndTraffic[$offset] = $value;
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
      unset($this->EstimatedBidAndTraffic[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EstimatedBidAndTraffic Return the current element
     */
    public function current()
    {
      return current($this->EstimatedBidAndTraffic);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EstimatedBidAndTraffic);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EstimatedBidAndTraffic);
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
      reset($this->EstimatedBidAndTraffic);
    }

    /**
     * Countable implementation
     *
     * @return EstimatedBidAndTraffic Return count of elements
     */
    public function count()
    {
      return count($this->EstimatedBidAndTraffic);
    }

}
