<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordSearchCount implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordSearchCount[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordSearchCount ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordSearchCount Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordSearchCount) ? count($this->KeywordSearchCount) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordSearchCount[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordSearchCount)
    {
        $prev = $this->KeywordSearchCount;
        $this->KeywordSearchCount = $KeywordSearchCount;
        return $prev;
    }

}
