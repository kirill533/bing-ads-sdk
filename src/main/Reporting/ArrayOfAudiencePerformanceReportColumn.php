<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAudiencePerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return AudiencePerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AudiencePerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AudiencePerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AudiencePerformanceReportColumn);
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
      reset($this->AudiencePerformanceReportColumn);
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

}
