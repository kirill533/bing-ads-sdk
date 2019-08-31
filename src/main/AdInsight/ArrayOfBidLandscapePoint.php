<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBidLandscapePoint implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BidLandscapePoint[] $BidLandscapePoint
     */
    protected $BidLandscapePoint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BidLandscapePoint[]
     */
    public function getBidLandscapePoint()
    {
        return $this->BidLandscapePoint;
    }

    /**
     * @param BidLandscapePoint[] $BidLandscapePoint
     * @return \PMG\BingAds\AdInsight\ArrayOfBidLandscapePoint
     */
    public function setBidLandscapePoint(array $BidLandscapePoint = null)
    {
        $this->BidLandscapePoint = $BidLandscapePoint;
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
      return isset($this->BidLandscapePoint[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BidLandscapePoint
     */
    public function offsetGet($offset)
    {
      return $this->BidLandscapePoint[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BidLandscapePoint $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BidLandscapePoint[] = $value;
      } else {
        $this->BidLandscapePoint[$offset] = $value;
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
      unset($this->BidLandscapePoint[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BidLandscapePoint[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BidLandscapePoint);
    }

    /**
     * Countable implementation
     *
     * @return BidLandscapePoint Return count of elements
     */
    public function count()
    {
      return count($this->BidLandscapePoint);
    }

    /**
     * Change the current array with another
     *
     * @return BidLandscapePoint[]|null The previous array if present
     */
    public function exchangeArray(array $BidLandscapePoint)
    {
        $prev = $this->BidLandscapePoint;
        $this->BidLandscapePoint = $BidLandscapePoint;
        return $prev;
    }

}
