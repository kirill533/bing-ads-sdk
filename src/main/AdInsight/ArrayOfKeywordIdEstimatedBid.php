<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdEstimatedBid implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordIdEstimatedBid[] $KeywordIdEstimatedBid
     */
    protected $KeywordIdEstimatedBid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdEstimatedBid[]
     */
    public function getKeywordIdEstimatedBid()
    {
        return $this->KeywordIdEstimatedBid;
    }

    /**
     * @param KeywordIdEstimatedBid[] $KeywordIdEstimatedBid
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdEstimatedBid
     */
    public function setKeywordIdEstimatedBid(array $KeywordIdEstimatedBid = null)
    {
        $this->KeywordIdEstimatedBid = $KeywordIdEstimatedBid;
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
      return isset($this->KeywordIdEstimatedBid[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdEstimatedBid
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdEstimatedBid[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdEstimatedBid $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdEstimatedBid[] = $value;
      } else {
        $this->KeywordIdEstimatedBid[$offset] = $value;
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
      unset($this->KeywordIdEstimatedBid[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordIdEstimatedBid[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordIdEstimatedBid ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdEstimatedBid Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordIdEstimatedBid) ? count($this->KeywordIdEstimatedBid) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordIdEstimatedBid[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordIdEstimatedBid)
    {
        $prev = $this->KeywordIdEstimatedBid;
        $this->KeywordIdEstimatedBid = $KeywordIdEstimatedBid;
        return $prev;
    }

}
