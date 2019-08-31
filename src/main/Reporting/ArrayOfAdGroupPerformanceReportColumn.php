<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdGroupPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdGroupPerformanceReportColumn[] $AdGroupPerformanceReportColumn
     */
    protected $AdGroupPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupPerformanceReportColumn[]
     */
    public function getAdGroupPerformanceReportColumn()
    {
        return $this->AdGroupPerformanceReportColumn;
    }

    /**
     * @param AdGroupPerformanceReportColumn[] $AdGroupPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdGroupPerformanceReportColumn
     */
    public function setAdGroupPerformanceReportColumn(array $AdGroupPerformanceReportColumn = null)
    {
        $this->AdGroupPerformanceReportColumn = $AdGroupPerformanceReportColumn;
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
      return isset($this->AdGroupPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupPerformanceReportColumn[] = $value;
      } else {
        $this->AdGroupPerformanceReportColumn[$offset] = $value;
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
      unset($this->AdGroupPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdGroupPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupPerformanceReportColumn)
    {
        $prev = $this->AdGroupPerformanceReportColumn;
        $this->AdGroupPerformanceReportColumn = $AdGroupPerformanceReportColumn;
        return $prev;
    }

}
