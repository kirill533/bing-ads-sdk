<?php

namespace PMG\BingAds\Reporting;

class ArrayOfUserLocationPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var UserLocationPerformanceReportColumn[] $UserLocationPerformanceReportColumn
     */
    protected $UserLocationPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserLocationPerformanceReportColumn[]
     */
    public function getUserLocationPerformanceReportColumn()
    {
        return $this->UserLocationPerformanceReportColumn;
    }

    /**
     * @param UserLocationPerformanceReportColumn[] $UserLocationPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfUserLocationPerformanceReportColumn
     */
    public function setUserLocationPerformanceReportColumn(array $UserLocationPerformanceReportColumn = null)
    {
        $this->UserLocationPerformanceReportColumn = $UserLocationPerformanceReportColumn;
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
      return isset($this->UserLocationPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserLocationPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->UserLocationPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserLocationPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UserLocationPerformanceReportColumn[] = $value;
      } else {
        $this->UserLocationPerformanceReportColumn[$offset] = $value;
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
      unset($this->UserLocationPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return UserLocationPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->UserLocationPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return UserLocationPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->UserLocationPerformanceReportColumn) ? count($this->UserLocationPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return UserLocationPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $UserLocationPerformanceReportColumn)
    {
        $prev = $this->UserLocationPerformanceReportColumn;
        $this->UserLocationPerformanceReportColumn = $UserLocationPerformanceReportColumn;
        return $prev;
    }

}
