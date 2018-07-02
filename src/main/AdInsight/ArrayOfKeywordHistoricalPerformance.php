<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordHistoricalPerformance implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordHistoricalPerformance[] $KeywordHistoricalPerformance
     */
    protected $KeywordHistoricalPerformance = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordHistoricalPerformance[]
     */
    public function getKeywordHistoricalPerformance()
    {
      return $this->KeywordHistoricalPerformance;
    }

    /**
     * @param KeywordHistoricalPerformance[] $KeywordHistoricalPerformance
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordHistoricalPerformance
     */
    public function setKeywordHistoricalPerformance(array $KeywordHistoricalPerformance = null)
    {
      $this->KeywordHistoricalPerformance = $KeywordHistoricalPerformance;
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
      return isset($this->KeywordHistoricalPerformance[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordHistoricalPerformance
     */
    public function offsetGet($offset)
    {
      return $this->KeywordHistoricalPerformance[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordHistoricalPerformance $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordHistoricalPerformance[] = $value;
      } else {
        $this->KeywordHistoricalPerformance[$offset] = $value;
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
      unset($this->KeywordHistoricalPerformance[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordHistoricalPerformance Return the current element
     */
    public function current()
    {
      return current($this->KeywordHistoricalPerformance);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordHistoricalPerformance);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordHistoricalPerformance);
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
      reset($this->KeywordHistoricalPerformance);
    }

    /**
     * Countable implementation
     *
     * @return KeywordHistoricalPerformance Return count of elements
     */
    public function count()
    {
      return count($this->KeywordHistoricalPerformance);
    }

}
