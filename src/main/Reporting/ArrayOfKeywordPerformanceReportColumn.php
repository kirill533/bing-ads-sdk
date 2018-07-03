<?php

namespace PMG\BingAds\Reporting;

class ArrayOfKeywordPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordPerformanceReportColumn[] $KeywordPerformanceReportColumn
     */
    protected $KeywordPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordPerformanceReportColumn[]
     */
    public function getKeywordPerformanceReportColumn()
    {
      return $this->KeywordPerformanceReportColumn;
    }

    /**
     * @param KeywordPerformanceReportColumn[] $KeywordPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfKeywordPerformanceReportColumn
     */
    public function setKeywordPerformanceReportColumn(array $KeywordPerformanceReportColumn = null)
    {
      $this->KeywordPerformanceReportColumn = $KeywordPerformanceReportColumn;
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
      return isset($this->KeywordPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->KeywordPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordPerformanceReportColumn[] = $value;
      } else {
        $this->KeywordPerformanceReportColumn[$offset] = $value;
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
      unset($this->KeywordPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return KeywordPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->KeywordPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordPerformanceReportColumn)
    {
        $prev = $this->KeywordPerformanceReportColumn;
        $this->KeywordPerformanceReportColumn = $KeywordPerformanceReportColumn;
        return $prev;
    }

}
