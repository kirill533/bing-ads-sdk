<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductPartitionPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return ProductPartitionPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProductPartitionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductPartitionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductPartitionPerformanceReportColumn);
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
      reset($this->ProductPartitionPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProductPartitionPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProductPartitionPerformanceReportColumn);
    }

}
