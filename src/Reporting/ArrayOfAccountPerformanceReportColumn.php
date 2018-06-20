<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAccountPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountPerformanceReportColumn[] $AccountPerformanceReportColumn
     */
    protected $AccountPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountPerformanceReportColumn[]
     */
    public function getAccountPerformanceReportColumn()
    {
      return $this->AccountPerformanceReportColumn;
    }

    /**
     * @param AccountPerformanceReportColumn[] $AccountPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAccountPerformanceReportColumn
     */
    public function setAccountPerformanceReportColumn(array $AccountPerformanceReportColumn = null)
    {
      $this->AccountPerformanceReportColumn = $AccountPerformanceReportColumn;
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
      return isset($this->AccountPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AccountPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountPerformanceReportColumn[] = $value;
      } else {
        $this->AccountPerformanceReportColumn[$offset] = $value;
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
      unset($this->AccountPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AccountPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountPerformanceReportColumn);
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
      reset($this->AccountPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AccountPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AccountPerformanceReportColumn);
    }

}
