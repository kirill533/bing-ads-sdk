<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAuctionInsightKpi implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AuctionInsightKpi[] $AuctionInsightKpi
     */
    protected $AuctionInsightKpi = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuctionInsightKpi[]
     */
    public function getAuctionInsightKpi()
    {
      return $this->AuctionInsightKpi;
    }

    /**
     * @param AuctionInsightKpi[] $AuctionInsightKpi
     * @return \PMG\BingAds\AdInsight\ArrayOfAuctionInsightKpi
     */
    public function setAuctionInsightKpi(array $AuctionInsightKpi = null)
    {
      $this->AuctionInsightKpi = $AuctionInsightKpi;
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
      return isset($this->AuctionInsightKpi[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AuctionInsightKpi
     */
    public function offsetGet($offset)
    {
      return $this->AuctionInsightKpi[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AuctionInsightKpi $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AuctionInsightKpi[] = $value;
      } else {
        $this->AuctionInsightKpi[$offset] = $value;
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
      unset($this->AuctionInsightKpi[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AuctionInsightKpi[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AuctionInsightKpi);
    }

    /**
     * Countable implementation
     *
     * @return AuctionInsightKpi Return count of elements
     */
    public function count()
    {
      return count($this->AuctionInsightKpi);
    }

    /**
     * Change the current array with another
     *
     * @return AuctionInsightKpi[]|null The previous array if present
     */
    public function exchangeArray(array $AuctionInsightKpi)
    {
        $prev = $this->AuctionInsightKpi;
        $this->AuctionInsightKpi = $AuctionInsightKpi;
        return $prev;
    }

}
