<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSAAutoTargetPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DSAAutoTargetPerformanceReportColumn[] $DSAAutoTargetPerformanceReportColumn
     */
    protected $DSAAutoTargetPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSAAutoTargetPerformanceReportColumn[]
     */
    public function getDSAAutoTargetPerformanceReportColumn()
    {
      return $this->DSAAutoTargetPerformanceReportColumn;
    }

    /**
     * @param DSAAutoTargetPerformanceReportColumn[] $DSAAutoTargetPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfDSAAutoTargetPerformanceReportColumn
     */
    public function setDSAAutoTargetPerformanceReportColumn(array $DSAAutoTargetPerformanceReportColumn = null)
    {
      $this->DSAAutoTargetPerformanceReportColumn = $DSAAutoTargetPerformanceReportColumn;
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
      return isset($this->DSAAutoTargetPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DSAAutoTargetPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->DSAAutoTargetPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DSAAutoTargetPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DSAAutoTargetPerformanceReportColumn[] = $value;
      } else {
        $this->DSAAutoTargetPerformanceReportColumn[$offset] = $value;
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
      unset($this->DSAAutoTargetPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DSAAutoTargetPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->DSAAutoTargetPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DSAAutoTargetPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DSAAutoTargetPerformanceReportColumn);
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
      reset($this->DSAAutoTargetPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return DSAAutoTargetPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->DSAAutoTargetPerformanceReportColumn);
    }

}
