<?php

namespace PMG\BingAds\Reporting;

class ArrayOfGeographicPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var GeographicPerformanceReportColumn[] $GeographicPerformanceReportColumn
     */
    protected $GeographicPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GeographicPerformanceReportColumn[]
     */
    public function getGeographicPerformanceReportColumn()
    {
        return $this->GeographicPerformanceReportColumn;
    }

    /**
     * @param GeographicPerformanceReportColumn[] $GeographicPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfGeographicPerformanceReportColumn
     */
    public function setGeographicPerformanceReportColumn(array $GeographicPerformanceReportColumn = null)
    {
        $this->GeographicPerformanceReportColumn = $GeographicPerformanceReportColumn;
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
      return isset($this->GeographicPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GeographicPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->GeographicPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GeographicPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GeographicPerformanceReportColumn[] = $value;
      } else {
        $this->GeographicPerformanceReportColumn[$offset] = $value;
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
      unset($this->GeographicPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return GeographicPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->GeographicPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return GeographicPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->GeographicPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return GeographicPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $GeographicPerformanceReportColumn)
    {
        $prev = $this->GeographicPerformanceReportColumn;
        $this->GeographicPerformanceReportColumn = $GeographicPerformanceReportColumn;
        return $prev;
    }

}
