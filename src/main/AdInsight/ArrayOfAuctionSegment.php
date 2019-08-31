<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAuctionSegment implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AuctionSegment[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AuctionSegment);
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

    /**
     * Change the current array with another
     *
     * @return AuctionSegment[]|null The previous array if present
     */
    public function exchangeArray(array $AuctionSegment)
    {
        $prev = $this->AuctionSegment;
        $this->AuctionSegment = $AuctionSegment;
        return $prev;
    }

}
