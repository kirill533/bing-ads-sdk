<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAuctionInsightEntry implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AuctionInsightEntry[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AuctionInsightEntry ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AuctionInsightEntry Return count of elements
     */
    public function count()
    {
        return is_array($this->AuctionInsightEntry) ? count($this->AuctionInsightEntry) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AuctionInsightEntry[]|null The previous array if present
     */
    public function exchangeArray(array $AuctionInsightEntry)
    {
        $prev = $this->AuctionInsightEntry;
        $this->AuctionInsightEntry = $AuctionInsightEntry;
        return $prev;
    }

}
