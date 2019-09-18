<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDestinationUrlPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var DestinationUrlPerformanceReportColumn[] $DestinationUrlPerformanceReportColumn
     */
    protected $DestinationUrlPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DestinationUrlPerformanceReportColumn[]
     */
    public function getDestinationUrlPerformanceReportColumn()
    {
        return $this->DestinationUrlPerformanceReportColumn;
    }

    /**
     * @param DestinationUrlPerformanceReportColumn[] $DestinationUrlPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfDestinationUrlPerformanceReportColumn
     */
    public function setDestinationUrlPerformanceReportColumn(array $DestinationUrlPerformanceReportColumn = null)
    {
        $this->DestinationUrlPerformanceReportColumn = $DestinationUrlPerformanceReportColumn;
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
      return isset($this->DestinationUrlPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DestinationUrlPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->DestinationUrlPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DestinationUrlPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DestinationUrlPerformanceReportColumn[] = $value;
      } else {
        $this->DestinationUrlPerformanceReportColumn[$offset] = $value;
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
      unset($this->DestinationUrlPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return DestinationUrlPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DestinationUrlPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return DestinationUrlPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->DestinationUrlPerformanceReportColumn) ? count($this->DestinationUrlPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return DestinationUrlPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $DestinationUrlPerformanceReportColumn)
    {
        $prev = $this->DestinationUrlPerformanceReportColumn;
        $this->DestinationUrlPerformanceReportColumn = $DestinationUrlPerformanceReportColumn;
        return $prev;
    }

}
