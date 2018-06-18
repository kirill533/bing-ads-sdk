<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdEstimatedPosition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordIdEstimatedPosition[] $KeywordIdEstimatedPosition
     */
    protected $KeywordIdEstimatedPosition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdEstimatedPosition[]
     */
    public function getKeywordIdEstimatedPosition()
    {
      return $this->KeywordIdEstimatedPosition;
    }

    /**
     * @param KeywordIdEstimatedPosition[] $KeywordIdEstimatedPosition
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdEstimatedPosition
     */
    public function setKeywordIdEstimatedPosition(array $KeywordIdEstimatedPosition = null)
    {
      $this->KeywordIdEstimatedPosition = $KeywordIdEstimatedPosition;
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
      return isset($this->KeywordIdEstimatedPosition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdEstimatedPosition
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdEstimatedPosition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdEstimatedPosition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdEstimatedPosition[] = $value;
      } else {
        $this->KeywordIdEstimatedPosition[$offset] = $value;
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
      unset($this->KeywordIdEstimatedPosition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordIdEstimatedPosition Return the current element
     */
    public function current()
    {
      return current($this->KeywordIdEstimatedPosition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordIdEstimatedPosition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordIdEstimatedPosition);
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
      reset($this->KeywordIdEstimatedPosition);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdEstimatedPosition Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdEstimatedPosition);
    }

}
