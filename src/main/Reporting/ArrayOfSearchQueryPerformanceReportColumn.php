<?php

namespace PMG\BingAds\Reporting;

class ArrayOfSearchQueryPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return SearchQueryPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SearchQueryPerformanceReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return SearchQueryPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $SearchQueryPerformanceReportColumn)
    {
        $prev = $this->SearchQueryPerformanceReportColumn;
        $this->SearchQueryPerformanceReportColumn = $SearchQueryPerformanceReportColumn;
        return $prev;
    }

}
