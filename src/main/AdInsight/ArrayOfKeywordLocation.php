<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordLocation implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordLocation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordLocation);
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

    /**
     * Change the current array with another
     *
     * @return KeywordLocation[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordLocation)
    {
        $prev = $this->KeywordLocation;
        $this->KeywordLocation = $KeywordLocation;
        return $prev;
    }

}
