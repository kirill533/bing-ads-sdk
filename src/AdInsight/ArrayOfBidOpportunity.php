<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBidOpportunity implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return BidOpportunity Return the current element
     */
    public function current()
    {
      return current($this->BidOpportunity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BidOpportunity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BidOpportunity);
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
      reset($this->BidOpportunity);
    }

    /**
     * Countable implementation
     *
     * @return BidOpportunity Return count of elements
     */
    public function count()
    {
      return count($this->BidOpportunity);
    }

}
