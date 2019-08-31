<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfTargetSettingDetail implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var TargetSettingDetail[] $TargetSettingDetail
     */
    protected $TargetSettingDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetSettingDetail[]
     */
    public function getTargetSettingDetail()
    {
        return $this->TargetSettingDetail;
    }

    /**
     * @param TargetSettingDetail[] $TargetSettingDetail
     * @return \PMG\BingAds\CampaignManagement\ArrayOfTargetSettingDetail
     */
    public function setTargetSettingDetail(array $TargetSettingDetail = null)
    {
        $this->TargetSettingDetail = $TargetSettingDetail;
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
      return isset($this->TargetSettingDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetSettingDetail
     */
    public function offsetGet($offset)
    {
      return $this->TargetSettingDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetSettingDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetSettingDetail[] = $value;
      } else {
        $this->TargetSettingDetail[$offset] = $value;
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
      unset($this->TargetSettingDetail[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return TargetSettingDetail[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->TargetSettingDetail);
    }

    /**
     * Countable implementation
     *
     * @return TargetSettingDetail Return count of elements
     */
    public function count()
    {
      return count($this->TargetSettingDetail);
    }

    /**
     * Change the current array with another
     *
     * @return TargetSettingDetail[]|null The previous array if present
     */
    public function exchangeArray(array $TargetSettingDetail)
    {
        $prev = $this->TargetSettingDetail;
        $this->TargetSettingDetail = $TargetSettingDetail;
        return $prev;
    }

}
