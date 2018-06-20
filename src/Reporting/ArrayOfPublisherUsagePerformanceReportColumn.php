<?php

namespace PMG\BingAds\Reporting;

class ArrayOfPublisherUsagePerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PublisherUsagePerformanceReportColumn[] $PublisherUsagePerformanceReportColumn
     */
    protected $PublisherUsagePerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PublisherUsagePerformanceReportColumn[]
     */
    public function getPublisherUsagePerformanceReportColumn()
    {
      return $this->PublisherUsagePerformanceReportColumn;
    }

    /**
     * @param PublisherUsagePerformanceReportColumn[] $PublisherUsagePerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfPublisherUsagePerformanceReportColumn
     */
    public function setPublisherUsagePerformanceReportColumn(array $PublisherUsagePerformanceReportColumn = null)
    {
      $this->PublisherUsagePerformanceReportColumn = $PublisherUsagePerformanceReportColumn;
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
      return isset($this->PublisherUsagePerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PublisherUsagePerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->PublisherUsagePerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PublisherUsagePerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PublisherUsagePerformanceReportColumn[] = $value;
      } else {
        $this->PublisherUsagePerformanceReportColumn[$offset] = $value;
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
      unset($this->PublisherUsagePerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PublisherUsagePerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->PublisherUsagePerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PublisherUsagePerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PublisherUsagePerformanceReportColumn);
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
      reset($this->PublisherUsagePerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return PublisherUsagePerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->PublisherUsagePerformanceReportColumn);
    }

}
