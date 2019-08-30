<?php

namespace PMG\BingAds\Reporting;

class ArrayOfKeywordPerformanceReportSort implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordPerformanceReportSort[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordPerformanceReportSort);
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

    /**
     * Change the current array with another
     *
     * @return KeywordPerformanceReportSort[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordPerformanceReportSort)
    {
        $prev = $this->KeywordPerformanceReportSort;
        $this->KeywordPerformanceReportSort = $KeywordPerformanceReportSort;
        return $prev;
    }

}
