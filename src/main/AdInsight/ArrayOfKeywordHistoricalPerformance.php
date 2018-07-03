<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordHistoricalPerformance implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordHistoricalPerformance[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordHistoricalPerformance);
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

    /**
     * Change the current array with another
     *
     * @return KeywordHistoricalPerformance[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordHistoricalPerformance)
    {
        $prev = $this->KeywordHistoricalPerformance;
        $this->KeywordHistoricalPerformance = $KeywordHistoricalPerformance;
        return $prev;
    }

}
