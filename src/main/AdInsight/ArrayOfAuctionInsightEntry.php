<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAuctionInsightEntry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AuctionInsightEntry[] $AuctionInsightEntry
     */
    protected $AuctionInsightEntry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuctionInsightEntry[]
     */
    public function getAuctionInsightEntry()
    {
      return $this->AuctionInsightEntry;
    }

    /**
     * @param AuctionInsightEntry[] $AuctionInsightEntry
     * @return \PMG\BingAds\AdInsight\ArrayOfAuctionInsightEntry
     */
    public function setAuctionInsightEntry(array $AuctionInsightEntry = null)
    {
      $this->AuctionInsightEntry = $AuctionInsightEntry;
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
      return isset($this->AuctionInsightEntry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AuctionInsightEntry
     */
    public function offsetGet($offset)
    {
      return $this->AuctionInsightEntry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AuctionInsightEntry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AuctionInsightEntry[] = $value;
      } else {
        $this->AuctionInsightEntry[$offset] = $value;
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
      unset($this->AuctionInsightEntry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AuctionInsightEntry Return the current element
     */
    public function current()
    {
      return current($this->AuctionInsightEntry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AuctionInsightEntry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AuctionInsightEntry);
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
      reset($this->AuctionInsightEntry);
    }

    /**
     * Countable implementation
     *
     * @return AuctionInsightEntry Return count of elements
     */
    public function count()
    {
      return count($this->AuctionInsightEntry);
    }

}
