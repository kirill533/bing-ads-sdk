<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignAdGroupIds implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CampaignAdGroupIds[] $CampaignAdGroupIds
     */
    protected $CampaignAdGroupIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignAdGroupIds[]
     */
    public function getCampaignAdGroupIds()
    {
        return $this->CampaignAdGroupIds;
    }

    /**
     * @param CampaignAdGroupIds[] $CampaignAdGroupIds
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaignAdGroupIds
     */
    public function setCampaignAdGroupIds(array $CampaignAdGroupIds = null)
    {
        $this->CampaignAdGroupIds = $CampaignAdGroupIds;
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
      return isset($this->CampaignAdGroupIds[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignAdGroupIds
     */
    public function offsetGet($offset)
    {
      return $this->CampaignAdGroupIds[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignAdGroupIds $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignAdGroupIds[] = $value;
      } else {
        $this->CampaignAdGroupIds[$offset] = $value;
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
      unset($this->CampaignAdGroupIds[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CampaignAdGroupIds[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignAdGroupIds ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CampaignAdGroupIds Return count of elements
     */
    public function count()
    {
        return is_array($this->CampaignAdGroupIds) ? count($this->CampaignAdGroupIds) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CampaignAdGroupIds[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignAdGroupIds)
    {
        $prev = $this->CampaignAdGroupIds;
        $this->CampaignAdGroupIds = $CampaignAdGroupIds;
        return $prev;
    }

}
