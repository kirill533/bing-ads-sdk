<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductPartitionUnitPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductPartitionUnitPerformanceReportColumn[] $ProductPartitionUnitPerformanceReportColumn
     */
    protected $ProductPartitionUnitPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPartitionUnitPerformanceReportColumn[]
     */
    public function getProductPartitionUnitPerformanceReportColumn()
    {
      return $this->ProductPartitionUnitPerformanceReportColumn;
    }

    /**
     * @param ProductPartitionUnitPerformanceReportColumn[] $ProductPartitionUnitPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductPartitionUnitPerformanceReportColumn
     */
    public function setProductPartitionUnitPerformanceReportColumn(array $ProductPartitionUnitPerformanceReportColumn = null)
    {
      $this->ProductPartitionUnitPerformanceReportColumn = $ProductPartitionUnitPerformanceReportColumn;
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
      return isset($this->ProductPartitionUnitPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPartitionUnitPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductPartitionUnitPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPartitionUnitPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductPartitionUnitPerformanceReportColumn[] = $value;
      } else {
        $this->ProductPartitionUnitPerformanceReportColumn[$offset] = $value;
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
      unset($this->ProductPartitionUnitPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductPartitionUnitPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProductPartitionUnitPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductPartitionUnitPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductPartitionUnitPerformanceReportColumn);
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
      reset($this->ProductPartitionUnitPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProductPartitionUnitPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProductPartitionUnitPerformanceReportColumn);
    }

}
