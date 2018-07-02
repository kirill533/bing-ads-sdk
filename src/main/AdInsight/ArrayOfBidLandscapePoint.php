<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBidLandscapePoint implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return BidLandscapePoint Return the current element
     */
    public function current()
    {
      return current($this->BidLandscapePoint);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BidLandscapePoint);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BidLandscapePoint);
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
      reset($this->BidLandscapePoint);
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

}
