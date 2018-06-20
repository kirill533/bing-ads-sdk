<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdDynamicTextPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return AdDynamicTextPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AdDynamicTextPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdDynamicTextPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdDynamicTextPerformanceReportColumn);
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
      reset($this->AdDynamicTextPerformanceReportColumn);
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

}
