<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCampaignPerformanceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignPerformanceReportColumn[] $CampaignPerformanceReportColumn
     */
    protected $CampaignPerformanceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignPerformanceReportColumn[]
     */
    public function getCampaignPerformanceReportColumn()
    {
      return $this->CampaignPerformanceReportColumn;
    }

    /**
     * @param CampaignPerformanceReportColumn[] $CampaignPerformanceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfCampaignPerformanceReportColumn
     */
    public function setCampaignPerformanceReportColumn(array $CampaignPerformanceReportColumn = null)
    {
      $this->CampaignPerformanceReportColumn = $CampaignPerformanceReportColumn;
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
      return isset($this->CampaignPerformanceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignPerformanceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->CampaignPerformanceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignPerformanceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignPerformanceReportColumn[] = $value;
      } else {
        $this->CampaignPerformanceReportColumn[$offset] = $value;
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
      unset($this->CampaignPerformanceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignPerformanceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->CampaignPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignPerformanceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignPerformanceReportColumn);
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
      reset($this->CampaignPerformanceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return CampaignPerformanceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->CampaignPerformanceReportColumn);
    }

}
