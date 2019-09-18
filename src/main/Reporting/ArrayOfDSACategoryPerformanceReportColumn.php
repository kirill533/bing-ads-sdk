<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSACategoryPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return DSACategoryPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DSACategoryPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return DSACategoryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->DSACategoryPerformanceReportColumn) ? count($this->DSACategoryPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return DSACategoryPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $DSACategoryPerformanceReportColumn)
    {
        $prev = $this->DSACategoryPerformanceReportColumn;
        $this->DSACategoryPerformanceReportColumn = $DSACategoryPerformanceReportColumn;
        return $prev;
    }

}
