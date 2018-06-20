<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSASearchQueryPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DSASearchQueryPerformanceReportColumn[] $DSASearchQueryPerformanceReportColumn
     */
    protected $DSASearchQueryPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSASearchQueryPerformanceReportColumn[]
     */
    public function getDSASearchQueryPerformanceReportColumn()
    {
      return $this->DSASearchQueryPerformanceReportColumn;
    }

    /**
     * @param DSASearchQueryPerformanceReportColumn[] $DSASearchQueryPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfDSASearchQueryPerformanceReportColumn
     */
    public function setDSASearchQueryPerformanceReportColumn(array $DSASearchQueryPerformanceReportColumn = null)
    {
      $this->DSASearchQueryPerformanceReportColumn = $DSASearchQueryPerformanceReportColumn;
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
      return isset($this->DSASearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DSASearchQueryPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->DSASearchQueryPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DSASearchQueryPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DSASearchQueryPerformanceReportColumn[] = $value;
      } else {
        $this->DSASearchQueryPerformanceReportColumn[$offset] = $value;
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
      unset($this->DSASearchQueryPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DSASearchQueryPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->DSASearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DSASearchQueryPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DSASearchQueryPerformanceReportColumn);
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
      reset($this->DSASearchQueryPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return DSASearchQueryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->DSASearchQueryPerformanceReportColumn);
    }

}
