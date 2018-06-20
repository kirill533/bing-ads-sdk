<?php

namespace PMG\BingAds\Reporting;

class ArrayOfSearchCampaignChangeHistoryReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return SearchCampaignChangeHistoryReportColumn Return the current element
     */
    public function current()
    {
      return current($this->SearchCampaignChangeHistoryReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SearchCampaignChangeHistoryReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SearchCampaignChangeHistoryReportColumn);
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
      reset($this->SearchCampaignChangeHistoryReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return SearchCampaignChangeHistoryReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->SearchCampaignChangeHistoryReportColumn);
    }

}
