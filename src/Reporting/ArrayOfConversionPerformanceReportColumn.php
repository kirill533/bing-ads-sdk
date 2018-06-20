<?php

namespace PMG\BingAds\Reporting;

class ArrayOfConversionPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ConversionPerformanceReportColumn[] $ConversionPerformanceReportColumn
     */
    protected $ConversionPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConversionPerformanceReportColumn[]
     */
    public function getConversionPerformanceReportColumn()
    {
      return $this->ConversionPerformanceReportColumn;
    }

    /**
     * @param ConversionPerformanceReportColumn[] $ConversionPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfConversionPerformanceReportColumn
     */
    public function setConversionPerformanceReportColumn(array $ConversionPerformanceReportColumn = null)
    {
      $this->ConversionPerformanceReportColumn = $ConversionPerformanceReportColumn;
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
      return isset($this->ConversionPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ConversionPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ConversionPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ConversionPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ConversionPerformanceReportColumn[] = $value;
      } else {
        $this->ConversionPerformanceReportColumn[$offset] = $value;
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
      unset($this->ConversionPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ConversionPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ConversionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ConversionPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ConversionPerformanceReportColumn);
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
      reset($this->ConversionPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ConversionPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ConversionPerformanceReportColumn);
    }

}
