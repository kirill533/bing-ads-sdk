<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCampaignEstimate implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return CampaignEstimate Return the current element
     */
    public function current()
    {
      return current($this->CampaignEstimate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignEstimate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignEstimate);
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
      reset($this->CampaignEstimate);
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

}
