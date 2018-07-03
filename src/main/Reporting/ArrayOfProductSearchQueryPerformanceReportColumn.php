<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductSearchQueryPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ProductSearchQueryPerformanceReportColumn[] $ProductSearchQueryPerformanceReportColumn
     */
    protected $ProductSearchQueryPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductSearchQueryPerformanceReportColumn[]
     */
    public function getProductSearchQueryPerformanceReportColumn()
    {
      return $this->ProductSearchQueryPerformanceReportColumn;
    }

    /**
     * @param ProductSearchQueryPerformanceReportColumn[] $ProductSearchQueryPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProductSearchQueryPerformanceReportColumn
     */
    public function setProductSearchQueryPerformanceReportColumn(array $ProductSearchQueryPerformanceReportColumn = null)
    {
      $this->ProductSearchQueryPerformanceReportColumn = $ProductSearchQueryPerformanceReportColumn;
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
      return isset($this->ProductSearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductSearchQueryPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProductSearchQueryPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductSearchQueryPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductSearchQueryPerformanceReportColumn[] = $value;
      } else {
        $this->ProductSearchQueryPerformanceReportColumn[$offset] = $value;
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
      unset($this->ProductSearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ProductSearchQueryPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductSearchQueryPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProductSearchQueryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProductSearchQueryPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return ProductSearchQueryPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProductSearchQueryPerformanceReportColumn)
    {
        $prev = $this->ProductSearchQueryPerformanceReportColumn;
        $this->ProductSearchQueryPerformanceReportColumn = $ProductSearchQueryPerformanceReportColumn;
        return $prev;
    }

}
