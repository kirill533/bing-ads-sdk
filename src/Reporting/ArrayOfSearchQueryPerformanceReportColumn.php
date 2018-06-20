<?php

namespace PMG\BingAds\Reporting;

class ArrayOfSearchQueryPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SearchQueryPerformanceReportColumn[] $SearchQueryPerformanceReportColumn
     */
    protected $SearchQueryPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchQueryPerformanceReportColumn[]
     */
    public function getSearchQueryPerformanceReportColumn()
    {
      return $this->SearchQueryPerformanceReportColumn;
    }

    /**
     * @param SearchQueryPerformanceReportColumn[] $SearchQueryPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfSearchQueryPerformanceReportColumn
     */
    public function setSearchQueryPerformanceReportColumn(array $SearchQueryPerformanceReportColumn = null)
    {
      $this->SearchQueryPerformanceReportColumn = $SearchQueryPerformanceReportColumn;
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
      return isset($this->SearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SearchQueryPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->SearchQueryPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SearchQueryPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SearchQueryPerformanceReportColumn[] = $value;
      } else {
        $this->SearchQueryPerformanceReportColumn[$offset] = $value;
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
      unset($this->SearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SearchQueryPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->SearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SearchQueryPerformanceReportColumn);
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
      reset($this->SearchQueryPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return SearchQueryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->SearchQueryPerformanceReportColumn);
    }

}
