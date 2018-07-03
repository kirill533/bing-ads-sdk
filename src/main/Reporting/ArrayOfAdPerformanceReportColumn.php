<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdPerformanceReportColumn[] $AdPerformanceReportColumn
     */
    protected $AdPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdPerformanceReportColumn[]
     */
    public function getAdPerformanceReportColumn()
    {
      return $this->AdPerformanceReportColumn;
    }

    /**
     * @param AdPerformanceReportColumn[] $AdPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdPerformanceReportColumn
     */
    public function setAdPerformanceReportColumn(array $AdPerformanceReportColumn = null)
    {
      $this->AdPerformanceReportColumn = $AdPerformanceReportColumn;
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
      return isset($this->AdPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdPerformanceReportColumn[] = $value;
      } else {
        $this->AdPerformanceReportColumn[$offset] = $value;
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
      unset($this->AdPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return AdPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdPerformanceReportColumn)
    {
        $prev = $this->AdPerformanceReportColumn;
        $this->AdPerformanceReportColumn = $AdPerformanceReportColumn;
        return $prev;
    }

}
