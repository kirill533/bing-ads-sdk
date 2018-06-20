<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductDimensionPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductDimensionPerformanceReportColumn[] $ProductDimensionPerformanceReportColumn
     */
    protected $ProductDimensionPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductDimensionPerformanceReportColumn[]
     */
    public function getProductDimensionPerformanceReportColumn()
    {
      return $this->ProductDimensionPerformanceReportColumn;
    }

    /**
     * @param ProductDimensionPerformanceReportColumn[] $ProductDimensionPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductDimensionPerformanceReportColumn
     */
    public function setProductDimensionPerformanceReportColumn(array $ProductDimensionPerformanceReportColumn = null)
    {
      $this->ProductDimensionPerformanceReportColumn = $ProductDimensionPerformanceReportColumn;
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
      return isset($this->ProductDimensionPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductDimensionPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductDimensionPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductDimensionPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductDimensionPerformanceReportColumn[] = $value;
      } else {
        $this->ProductDimensionPerformanceReportColumn[$offset] = $value;
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
      unset($this->ProductDimensionPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductDimensionPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProductDimensionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductDimensionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductDimensionPerformanceReportColumn);
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
      reset($this->ProductDimensionPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProductDimensionPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProductDimensionPerformanceReportColumn);
    }

}
