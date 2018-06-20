<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProductSearchQueryPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return ProductSearchQueryPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProductSearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductSearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductSearchQueryPerformanceReportColumn);
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
      reset($this->ProductSearchQueryPerformanceReportColumn);
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

}
