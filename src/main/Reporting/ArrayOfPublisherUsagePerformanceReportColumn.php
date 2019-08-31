<?php

namespace PMG\BingAds\Reporting;

class ArrayOfPublisherUsagePerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return PublisherUsagePerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->PublisherUsagePerformanceReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return PublisherUsagePerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $PublisherUsagePerformanceReportColumn)
    {
        $prev = $this->PublisherUsagePerformanceReportColumn;
        $this->PublisherUsagePerformanceReportColumn = $PublisherUsagePerformanceReportColumn;
        return $prev;
    }

}
