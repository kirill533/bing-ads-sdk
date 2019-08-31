<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCampaignEstimate implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CampaignEstimate[] $CampaignEstimate
     */
    protected $CampaignEstimate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignEstimate[]
     */
    public function getCampaignEstimate()
    {
        return $this->CampaignEstimate;
    }

    /**
     * @param CampaignEstimate[] $CampaignEstimate
     * @return \PMG\BingAds\AdInsight\ArrayOfCampaignEstimate
     */
    public function setCampaignEstimate(array $CampaignEstimate = null)
    {
        $this->CampaignEstimate = $CampaignEstimate;
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
      return isset($this->CampaignEstimate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignEstimate
     */
    public function offsetGet($offset)
    {
      return $this->CampaignEstimate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignEstimate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignEstimate[] = $value;
      } else {
        $this->CampaignEstimate[$offset] = $value;
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
      unset($this->CampaignEstimate[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CampaignEstimate[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignEstimate);
    }

    /**
     * Countable implementation
     *
     * @return CampaignEstimate Return count of elements
     */
    public function count()
    {
      return count($this->CampaignEstimate);
    }

    /**
     * Change the current array with another
     *
     * @return CampaignEstimate[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignEstimate)
    {
        $prev = $this->CampaignEstimate;
        $this->CampaignEstimate = $CampaignEstimate;
        return $prev;
    }

}
