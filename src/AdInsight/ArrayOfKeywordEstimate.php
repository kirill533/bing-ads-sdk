<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordEstimate[] $KeywordEstimate
     */
    protected $KeywordEstimate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimate[]
     */
    public function getKeywordEstimate()
    {
      return $this->KeywordEstimate;
    }

    /**
     * @param KeywordEstimate[] $KeywordEstimate
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimate
     */
    public function setKeywordEstimate(array $KeywordEstimate = null)
    {
      $this->KeywordEstimate = $KeywordEstimate;
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
      return isset($this->KeywordEstimate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimate
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimate[] = $value;
      } else {
        $this->KeywordEstimate[$offset] = $value;
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
      unset($this->KeywordEstimate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordEstimate Return the current element
     */
    public function current()
    {
      return current($this->KeywordEstimate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordEstimate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordEstimate);
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
      reset($this->KeywordEstimate);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimate Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimate);
    }

}
