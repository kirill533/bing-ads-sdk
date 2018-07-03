<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSAAutoTargetPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return DSAAutoTargetPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DSAAutoTargetPerformanceReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return DSAAutoTargetPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $DSAAutoTargetPerformanceReportColumn)
    {
        $prev = $this->DSAAutoTargetPerformanceReportColumn;
        $this->DSAAutoTargetPerformanceReportColumn = $DSAAutoTargetPerformanceReportColumn;
        return $prev;
    }

}
