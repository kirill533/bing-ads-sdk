<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordSearchCount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordSearchCount[] $KeywordSearchCount
     */
    protected $KeywordSearchCount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordSearchCount[]
     */
    public function getKeywordSearchCount()
    {
      return $this->KeywordSearchCount;
    }

    /**
     * @param KeywordSearchCount[] $KeywordSearchCount
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordSearchCount
     */
    public function setKeywordSearchCount(array $KeywordSearchCount = null)
    {
      $this->KeywordSearchCount = $KeywordSearchCount;
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
      return isset($this->KeywordSearchCount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordSearchCount
     */
    public function offsetGet($offset)
    {
      return $this->KeywordSearchCount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordSearchCount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordSearchCount[] = $value;
      } else {
        $this->KeywordSearchCount[$offset] = $value;
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
      unset($this->KeywordSearchCount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordSearchCount Return the current element
     */
    public function current()
    {
      return current($this->KeywordSearchCount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordSearchCount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordSearchCount);
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
      reset($this->KeywordSearchCount);
    }

    /**
     * Countable implementation
     *
     * @return KeywordSearchCount Return count of elements
     */
    public function count()
    {
      return count($this->KeywordSearchCount);
    }

}
