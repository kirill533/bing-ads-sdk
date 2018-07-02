<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdEstimatedBid implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return KeywordIdEstimatedBid Return the current element
     */
    public function current()
    {
      return current($this->KeywordIdEstimatedBid);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordIdEstimatedBid);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordIdEstimatedBid);
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
      reset($this->KeywordIdEstimatedBid);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdEstimatedBid Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdEstimatedBid);
    }

}
