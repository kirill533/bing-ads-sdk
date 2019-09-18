<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductPartitionUnitPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ProductPartitionUnitPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductPartitionUnitPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ProductPartitionUnitPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->ProductPartitionUnitPerformanceReportColumn) ? count($this->ProductPartitionUnitPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ProductPartitionUnitPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductPartitionUnitPerformanceReportColumn)
    {
        $prev = $this->ProductPartitionUnitPerformanceReportColumn;
        $this->ProductPartitionUnitPerformanceReportColumn = $ProductPartitionUnitPerformanceReportColumn;
        return $prev;
    }

}
