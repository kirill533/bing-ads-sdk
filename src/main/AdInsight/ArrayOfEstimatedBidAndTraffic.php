<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfEstimatedBidAndTraffic implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return EstimatedBidAndTraffic[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EstimatedBidAndTraffic);
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

    /**
     * Change the current array with another
     *
     * @return EstimatedBidAndTraffic[]|null The previous array if present
     */
    public function exchangeArray(array $EstimatedBidAndTraffic)
    {
        $prev = $this->EstimatedBidAndTraffic;
        $this->EstimatedBidAndTraffic = $EstimatedBidAndTraffic;
        return $prev;
    }

}
