<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAccountPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AccountPerformanceReportColumn[] $AccountPerformanceReportColumn
     */
    protected $AccountPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountPerformanceReportColumn[]
     */
    public function getAccountPerformanceReportColumn()
    {
        return $this->AccountPerformanceReportColumn;
    }

    /**
     * @param AccountPerformanceReportColumn[] $AccountPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAccountPerformanceReportColumn
     */
    public function setAccountPerformanceReportColumn(array $AccountPerformanceReportColumn = null)
    {
        $this->AccountPerformanceReportColumn = $AccountPerformanceReportColumn;
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
      return isset($this->AccountPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AccountPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountPerformanceReportColumn[] = $value;
      } else {
        $this->AccountPerformanceReportColumn[$offset] = $value;
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
      unset($this->AccountPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AccountPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AccountPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->AccountPerformanceReportColumn) ? count($this->AccountPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AccountPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AccountPerformanceReportColumn)
    {
        $prev = $this->AccountPerformanceReportColumn;
        $this->AccountPerformanceReportColumn = $AccountPerformanceReportColumn;
        return $prev;
    }

}
