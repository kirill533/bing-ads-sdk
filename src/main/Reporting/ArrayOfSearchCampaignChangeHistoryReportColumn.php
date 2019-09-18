<?php

namespace PMG\BingAds\Reporting;

class ArrayOfSearchCampaignChangeHistoryReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var SearchCampaignChangeHistoryReportColumn[] $SearchCampaignChangeHistoryReportColumn
     */
    protected $SearchCampaignChangeHistoryReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchCampaignChangeHistoryReportColumn[]
     */
    public function getSearchCampaignChangeHistoryReportColumn()
    {
        return $this->SearchCampaignChangeHistoryReportColumn;
    }

    /**
     * @param SearchCampaignChangeHistoryReportColumn[] $SearchCampaignChangeHistoryReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfSearchCampaignChangeHistoryReportColumn
     */
    public function setSearchCampaignChangeHistoryReportColumn(array $SearchCampaignChangeHistoryReportColumn = null)
    {
        $this->SearchCampaignChangeHistoryReportColumn = $SearchCampaignChangeHistoryReportColumn;
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
      return isset($this->SearchCampaignChangeHistoryReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SearchCampaignChangeHistoryReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->SearchCampaignChangeHistoryReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SearchCampaignChangeHistoryReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SearchCampaignChangeHistoryReportColumn[] = $value;
      } else {
        $this->SearchCampaignChangeHistoryReportColumn[$offset] = $value;
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
      unset($this->SearchCampaignChangeHistoryReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return SearchCampaignChangeHistoryReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SearchCampaignChangeHistoryReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return SearchCampaignChangeHistoryReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->SearchCampaignChangeHistoryReportColumn) ? count($this->SearchCampaignChangeHistoryReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return SearchCampaignChangeHistoryReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $SearchCampaignChangeHistoryReportColumn)
    {
        $prev = $this->SearchCampaignChangeHistoryReportColumn;
        $this->SearchCampaignChangeHistoryReportColumn = $SearchCampaignChangeHistoryReportColumn;
        return $prev;
    }

}
