<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfEstimatedPositionAndTraffic implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return EstimatedPositionAndTraffic[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EstimatedPositionAndTraffic);
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

    /**
     * Change the current array with another
     *
     * @return EstimatedPositionAndTraffic[]|null The previous array if present
     */
    public function exchangeArray(array $EstimatedPositionAndTraffic)
    {
        $prev = $this->EstimatedPositionAndTraffic;
        $this->EstimatedPositionAndTraffic = $EstimatedPositionAndTraffic;
        return $prev;
    }

}
