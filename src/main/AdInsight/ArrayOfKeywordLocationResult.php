<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordLocationResult implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordLocationResult[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordLocationResult);
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

    /**
     * Change the current array with another
     *
     * @return KeywordLocationResult[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordLocationResult)
    {
        $prev = $this->KeywordLocationResult;
        $this->KeywordLocationResult = $KeywordLocationResult;
        return $prev;
    }

}
