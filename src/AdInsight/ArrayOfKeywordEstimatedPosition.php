<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimatedPosition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordEstimatedPosition[] $KeywordEstimatedPosition
     */
    protected $KeywordEstimatedPosition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimatedPosition[]
     */
    public function getKeywordEstimatedPosition()
    {
      return $this->KeywordEstimatedPosition;
    }

    /**
     * @param KeywordEstimatedPosition[] $KeywordEstimatedPosition
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimatedPosition
     */
    public function setKeywordEstimatedPosition(array $KeywordEstimatedPosition = null)
    {
      $this->KeywordEstimatedPosition = $KeywordEstimatedPosition;
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
      return isset($this->KeywordEstimatedPosition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimatedPosition
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimatedPosition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimatedPosition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimatedPosition[] = $value;
      } else {
        $this->KeywordEstimatedPosition[$offset] = $value;
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
      unset($this->KeywordEstimatedPosition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordEstimatedPosition Return the current element
     */
    public function current()
    {
      return current($this->KeywordEstimatedPosition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordEstimatedPosition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordEstimatedPosition);
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
      reset($this->KeywordEstimatedPosition);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimatedPosition Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimatedPosition);
    }

}
