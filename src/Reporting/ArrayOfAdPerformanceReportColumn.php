<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return AdPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AdPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdPerformanceReportColumn);
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
      reset($this->AdPerformanceReportColumn);
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

}
