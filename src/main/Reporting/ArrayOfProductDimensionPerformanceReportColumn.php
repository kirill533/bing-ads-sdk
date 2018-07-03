<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductDimensionPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ProductDimensionPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductDimensionPerformanceReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return ProductDimensionPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductDimensionPerformanceReportColumn)
    {
        $prev = $this->ProductDimensionPerformanceReportColumn;
        $this->ProductDimensionPerformanceReportColumn = $ProductDimensionPerformanceReportColumn;
        return $prev;
    }

}
