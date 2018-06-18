<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAuctionSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AuctionSegment[] $AuctionSegment
     */
    protected $AuctionSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuctionSegment[]
     */
    public function getAuctionSegment()
    {
      return $this->AuctionSegment;
    }

    /**
     * @param AuctionSegment[] $AuctionSegment
     * @return \PMG\BingAds\AdInsight\ArrayOfAuctionSegment
     */
    public function setAuctionSegment(array $AuctionSegment = null)
    {
      $this->AuctionSegment = $AuctionSegment;
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
      return isset($this->AuctionSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AuctionSegment
     */
    public function offsetGet($offset)
    {
      return $this->AuctionSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AuctionSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AuctionSegment[] = $value;
      } else {
        $this->AuctionSegment[$offset] = $value;
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
      unset($this->AuctionSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AuctionSegment Return the current element
     */
    public function current()
    {
      return current($this->AuctionSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AuctionSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AuctionSegment);
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
      reset($this->AuctionSegment);
    }

    /**
     * Countable implementation
     *
     * @return AuctionSegment Return count of elements
     */
    public function count()
    {
      return count($this->AuctionSegment);
    }

}
