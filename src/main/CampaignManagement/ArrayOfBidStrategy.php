<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBidStrategy implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BidStrategy[] $BidStrategy
     */
    protected $BidStrategy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BidStrategy[]
     */
    public function getBidStrategy()
    {
        return $this->BidStrategy;
    }

    /**
     * @param BidStrategy[] $BidStrategy
     * @return \PMG\BingAds\CampaignManagement\ArrayOfBidStrategy
     */
    public function setBidStrategy(array $BidStrategy = null)
    {
        $this->BidStrategy = $BidStrategy;
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
      return isset($this->BidStrategy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BidStrategy
     */
    public function offsetGet($offset)
    {
      return $this->BidStrategy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BidStrategy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BidStrategy[] = $value;
      } else {
        $this->BidStrategy[$offset] = $value;
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
      unset($this->BidStrategy[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BidStrategy[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BidStrategy ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BidStrategy Return count of elements
     */
    public function count()
    {
        return is_array($this->BidStrategy) ? count($this->BidStrategy) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BidStrategy[]|null The previous array if present
     */
    public function exchangeArray(array $BidStrategy)
    {
        $prev = $this->BidStrategy;
        $this->BidStrategy = $BidStrategy;
        return $prev;
    }

}
