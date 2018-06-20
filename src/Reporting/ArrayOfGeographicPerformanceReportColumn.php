<?php

namespace PMG\BingAds\Reporting;

class ArrayOfGeographicPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return GeographicPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->GeographicPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GeographicPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GeographicPerformanceReportColumn);
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
      reset($this->GeographicPerformanceReportColumn);
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

}
