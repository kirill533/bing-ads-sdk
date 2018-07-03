<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimatedBid implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordEstimatedBid[] $KeywordEstimatedBid
     */
    protected $KeywordEstimatedBid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimatedBid[]
     */
    public function getKeywordEstimatedBid()
    {
      return $this->KeywordEstimatedBid;
    }

    /**
     * @param KeywordEstimatedBid[] $KeywordEstimatedBid
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimatedBid
     */
    public function setKeywordEstimatedBid(array $KeywordEstimatedBid = null)
    {
      $this->KeywordEstimatedBid = $KeywordEstimatedBid;
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
      return isset($this->KeywordEstimatedBid[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimatedBid
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimatedBid[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimatedBid $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimatedBid[] = $value;
      } else {
        $this->KeywordEstimatedBid[$offset] = $value;
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
      unset($this->KeywordEstimatedBid[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordEstimatedBid[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordEstimatedBid);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimatedBid Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimatedBid);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordEstimatedBid[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordEstimatedBid)
    {
        $prev = $this->KeywordEstimatedBid;
        $this->KeywordEstimatedBid = $KeywordEstimatedBid;
        return $prev;
    }

}
