<?php

namespace PMG\BingAds\Reporting;

class ArrayOfConversionPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ConversionPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ConversionPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ConversionPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->ConversionPerformanceReportColumn) ? count($this->ConversionPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ConversionPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ConversionPerformanceReportColumn)
    {
        $prev = $this->ConversionPerformanceReportColumn;
        $this->ConversionPerformanceReportColumn = $ConversionPerformanceReportColumn;
        return $prev;
    }

}
