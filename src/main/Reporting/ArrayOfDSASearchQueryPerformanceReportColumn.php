<?php

namespace PMG\BingAds\Reporting;

class ArrayOfDSASearchQueryPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return DSASearchQueryPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DSASearchQueryPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return DSASearchQueryPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->DSASearchQueryPerformanceReportColumn) ? count($this->DSASearchQueryPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return DSASearchQueryPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $DSASearchQueryPerformanceReportColumn)
    {
        $prev = $this->DSASearchQueryPerformanceReportColumn;
        $this->DSASearchQueryPerformanceReportColumn = $DSASearchQueryPerformanceReportColumn;
        return $prev;
    }

}
