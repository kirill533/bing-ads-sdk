<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSACategoryPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DSACategoryPerformanceReportColumn[] $DSACategoryPerformanceReportColumn
     */
    protected $DSACategoryPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSACategoryPerformanceReportColumn[]
     */
    public function getDSACategoryPerformanceReportColumn()
    {
      return $this->DSACategoryPerformanceReportColumn;
    }

    /**
     * @param DSACategoryPerformanceReportColumn[] $DSACategoryPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfDSACategoryPerformanceReportColumn
     */
    public function setDSACategoryPerformanceReportColumn(array $DSACategoryPerformanceReportColumn = null)
    {
      $this->DSACategoryPerformanceReportColumn = $DSACategoryPerformanceReportColumn;
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
      return isset($this->DSACategoryPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DSACategoryPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->DSACategoryPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DSACategoryPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DSACategoryPerformanceReportColumn[] = $value;
      } else {
        $this->DSACategoryPerformanceReportColumn[$offset] = $value;
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
      unset($this->DSACategoryPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DSACategoryPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->DSACategoryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DSACategoryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DSACategoryPerformanceReportColumn);
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
      reset($this->DSACategoryPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return DSACategoryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->DSACategoryPerformanceReportColumn);
    }

}
