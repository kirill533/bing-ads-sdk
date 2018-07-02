<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordLocationResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordLocationResult[] $KeywordLocationResult
     */
    protected $KeywordLocationResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordLocationResult[]
     */
    public function getKeywordLocationResult()
    {
      return $this->KeywordLocationResult;
    }

    /**
     * @param KeywordLocationResult[] $KeywordLocationResult
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordLocationResult
     */
    public function setKeywordLocationResult(array $KeywordLocationResult = null)
    {
      $this->KeywordLocationResult = $KeywordLocationResult;
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
      return isset($this->KeywordLocationResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordLocationResult
     */
    public function offsetGet($offset)
    {
      return $this->KeywordLocationResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordLocationResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordLocationResult[] = $value;
      } else {
        $this->KeywordLocationResult[$offset] = $value;
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
      unset($this->KeywordLocationResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordLocationResult Return the current element
     */
    public function current()
    {
      return current($this->KeywordLocationResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordLocationResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordLocationResult);
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
      reset($this->KeywordLocationResult);
    }

    /**
     * Countable implementation
     *
     * @return KeywordLocationResult Return count of elements
     */
    public function count()
    {
      return count($this->KeywordLocationResult);
    }

}
