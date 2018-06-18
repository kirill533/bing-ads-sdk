<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimator implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordEstimator[] $KeywordEstimator
     */
    protected $KeywordEstimator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimator[]
     */
    public function getKeywordEstimator()
    {
      return $this->KeywordEstimator;
    }

    /**
     * @param KeywordEstimator[] $KeywordEstimator
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimator
     */
    public function setKeywordEstimator(array $KeywordEstimator = null)
    {
      $this->KeywordEstimator = $KeywordEstimator;
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
      return isset($this->KeywordEstimator[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimator
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimator[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimator $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimator[] = $value;
      } else {
        $this->KeywordEstimator[$offset] = $value;
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
      unset($this->KeywordEstimator[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordEstimator Return the current element
     */
    public function current()
    {
      return current($this->KeywordEstimator);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordEstimator);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordEstimator);
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
      reset($this->KeywordEstimator);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimator Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimator);
    }

}
