<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordLocation[] $KeywordLocation
     */
    protected $KeywordLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordLocation[]
     */
    public function getKeywordLocation()
    {
      return $this->KeywordLocation;
    }

    /**
     * @param KeywordLocation[] $KeywordLocation
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordLocation
     */
    public function setKeywordLocation(array $KeywordLocation = null)
    {
      $this->KeywordLocation = $KeywordLocation;
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
      return isset($this->KeywordLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordLocation
     */
    public function offsetGet($offset)
    {
      return $this->KeywordLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordLocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordLocation[] = $value;
      } else {
        $this->KeywordLocation[$offset] = $value;
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
      unset($this->KeywordLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordLocation Return the current element
     */
    public function current()
    {
      return current($this->KeywordLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordLocation);
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
      reset($this->KeywordLocation);
    }

    /**
     * Countable implementation
     *
     * @return KeywordLocation Return count of elements
     */
    public function count()
    {
      return count($this->KeywordLocation);
    }

}
