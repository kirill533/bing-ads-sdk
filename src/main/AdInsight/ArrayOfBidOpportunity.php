<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBidOpportunity implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BidOpportunity[] $BidOpportunity
     */
    protected $BidOpportunity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BidOpportunity[]
     */
    public function getBidOpportunity()
    {
        return $this->BidOpportunity;
    }

    /**
     * @param BidOpportunity[] $BidOpportunity
     * @return \PMG\BingAds\AdInsight\ArrayOfBidOpportunity
     */
    public function setBidOpportunity(array $BidOpportunity = null)
    {
        $this->BidOpportunity = $BidOpportunity;
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
      return isset($this->BidOpportunity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BidOpportunity
     */
    public function offsetGet($offset)
    {
      return $this->BidOpportunity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BidOpportunity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BidOpportunity[] = $value;
      } else {
        $this->BidOpportunity[$offset] = $value;
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
      unset($this->BidOpportunity[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BidOpportunity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BidOpportunity ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BidOpportunity Return count of elements
     */
    public function count()
    {
        return is_array($this->BidOpportunity) ? count($this->BidOpportunity) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BidOpportunity[]|null The previous array if present
     */
    public function exchangeArray(array $BidOpportunity)
    {
        $prev = $this->BidOpportunity;
        $this->BidOpportunity = $BidOpportunity;
        return $prev;
    }

}
