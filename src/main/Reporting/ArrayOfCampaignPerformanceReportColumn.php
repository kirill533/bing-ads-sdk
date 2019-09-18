<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCampaignPerformanceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CampaignPerformanceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignPerformanceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CampaignPerformanceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->CampaignPerformanceReportColumn) ? count($this->CampaignPerformanceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CampaignPerformanceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignPerformanceReportColumn)
    {
        $prev = $this->CampaignPerformanceReportColumn;
        $this->CampaignPerformanceReportColumn = $CampaignPerformanceReportColumn;
        return $prev;
    }

}
