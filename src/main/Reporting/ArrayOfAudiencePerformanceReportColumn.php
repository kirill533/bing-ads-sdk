<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAudiencePerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AudiencePerformanceReportColumn[] $AudiencePerformanceReportColumn
     */
    protected $AudiencePerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AudiencePerformanceReportColumn[]
     */
    public function getAudiencePerformanceReportColumn()
    {
      return $this->AudiencePerformanceReportColumn;
    }

    /**
     * @param AudiencePerformanceReportColumn[] $AudiencePerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAudiencePerformanceReportColumn
     */
    public function setAudiencePerformanceReportColumn(array $AudiencePerformanceReportColumn = null)
    {
      $this->AudiencePerformanceReportColumn = $AudiencePerformanceReportColumn;
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
      return isset($this->AudiencePerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AudiencePerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AudiencePerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AudiencePerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AudiencePerformanceReportColumn[] = $value;
      } else {
        $this->AudiencePerformanceReportColumn[$offset] = $value;
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
      unset($this->AudiencePerformanceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AudiencePerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AudiencePerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AudiencePerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AudiencePerformanceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return AudiencePerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AudiencePerformanceReportColumn)
    {
        $prev = $this->AudiencePerformanceReportColumn;
        $this->AudiencePerformanceReportColumn = $AudiencePerformanceReportColumn;
        return $prev;
    }

}
