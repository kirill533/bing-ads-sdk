<?php

namespace PMG\BingAds\Reporting;

class ArrayOfKeywordPerformanceReportSort implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordPerformanceReportSort[] $KeywordPerformanceReportSort
     */
    protected $KeywordPerformanceReportSort = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordPerformanceReportSort[]
     */
    public function getKeywordPerformanceReportSort()
    {
      return $this->KeywordPerformanceReportSort;
    }

    /**
     * @param KeywordPerformanceReportSort[] $KeywordPerformanceReportSort
     * @return \PMG\BingAds\Reporting\ArrayOfKeywordPerformanceReportSort
     */
    public function setKeywordPerformanceReportSort(array $KeywordPerformanceReportSort = null)
    {
      $this->KeywordPerformanceReportSort = $KeywordPerformanceReportSort;
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
      return isset($this->KeywordPerformanceReportSort[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordPerformanceReportSort
     */
    public function offsetGet($offset)
    {
      return $this->KeywordPerformanceReportSort[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordPerformanceReportSort $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordPerformanceReportSort[] = $value;
      } else {
        $this->KeywordPerformanceReportSort[$offset] = $value;
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
      unset($this->KeywordPerformanceReportSort[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordPerformanceReportSort Return the current element
     */
    public function current()
    {
      return current($this->KeywordPerformanceReportSort);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordPerformanceReportSort);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordPerformanceReportSort);
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
      reset($this->KeywordPerformanceReportSort);
    }

    /**
     * Countable implementation
     *
     * @return KeywordPerformanceReportSort Return count of elements
     */
    public function count()
    {
      return count($this->KeywordPerformanceReportSort);
    }

}
