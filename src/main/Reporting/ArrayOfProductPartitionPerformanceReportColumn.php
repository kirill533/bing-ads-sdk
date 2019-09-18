<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductPartitionPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ProductPartitionPerformanceReportColumn[] $ProductPartitionPerformanceReportColumn
     */
    protected $ProductPartitionPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPartitionPerformanceReportColumn[]
     */
    public function getProductPartitionPerformanceReportColumn()
    {
        return $this->ProductPartitionPerformanceReportColumn;
    }

    /**
     * @param ProductPartitionPerformanceReportColumn[] $ProductPartitionPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductPartitionPerformanceReportColumn
     */
    public function setProductPartitionPerformanceReportColumn(array $ProductPartitionPerformanceReportColumn = null)
    {
        $this->ProductPartitionPerformanceReportColumn = $ProductPartitionPerformanceReportColumn;
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
      return isset($this->ProductPartitionPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPartitionPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductPartitionPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPartitionPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductPartitionPerformanceReportColumn[] = $value;
      } else {
        $this->ProductPartitionPerformanceReportColumn[$offset] = $value;
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
      unset($this->ProductPartitionPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ProductPartitionPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductPartitionPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ProductPartitionPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->ProductPartitionPerformanceReportColumn) ? count($this->ProductPartitionPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ProductPartitionPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductPartitionPerformanceReportColumn)
    {
        $prev = $this->ProductPartitionPerformanceReportColumn;
        $this->ProductPartitionPerformanceReportColumn = $ProductPartitionPerformanceReportColumn;
        return $prev;
    }

}
