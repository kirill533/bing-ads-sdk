<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdDynamicTextPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdDynamicTextPerformanceReportColumn[] $AdDynamicTextPerformanceReportColumn
     */
    protected $AdDynamicTextPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdDynamicTextPerformanceReportColumn[]
     */
    public function getAdDynamicTextPerformanceReportColumn()
    {
      return $this->AdDynamicTextPerformanceReportColumn;
    }

    /**
     * @param AdDynamicTextPerformanceReportColumn[] $AdDynamicTextPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdDynamicTextPerformanceReportColumn
     */
    public function setAdDynamicTextPerformanceReportColumn(array $AdDynamicTextPerformanceReportColumn = null)
    {
      $this->AdDynamicTextPerformanceReportColumn = $AdDynamicTextPerformanceReportColumn;
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
      return isset($this->AdDynamicTextPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdDynamicTextPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdDynamicTextPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdDynamicTextPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdDynamicTextPerformanceReportColumn[] = $value;
      } else {
        $this->AdDynamicTextPerformanceReportColumn[$offset] = $value;
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
      unset($this->AdDynamicTextPerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdDynamicTextPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdDynamicTextPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdDynamicTextPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdDynamicTextPerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return AdDynamicTextPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdDynamicTextPerformanceReportColumn)
    {
        $prev = $this->AdDynamicTextPerformanceReportColumn;
        $this->AdDynamicTextPerformanceReportColumn = $AdDynamicTextPerformanceReportColumn;
        return $prev;
    }

}
