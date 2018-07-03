<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaign implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Campaign[] $Campaign
     */
    protected $Campaign = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Campaign[]
     */
    public function getCampaign()
    {
      return $this->Campaign;
    }

    /**
     * @param Campaign[] $Campaign
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaign
     */
    public function setCampaign(array $Campaign = null)
    {
      $this->Campaign = $Campaign;
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
      return isset($this->Campaign[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Campaign
     */
    public function offsetGet($offset)
    {
      return $this->Campaign[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Campaign $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Campaign[] = $value;
      } else {
        $this->Campaign[$offset] = $value;
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
      unset($this->Campaign[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Campaign[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Campaign);
    }

    /**
     * Countable implementation
     *
     * @return Campaign Return count of elements
     */
    public function count()
    {
      return count($this->Campaign);
    }

    /**
     * Change the current array with another
     *
     * @return Campaign[]|null The previous array if present
     */
    public function exchangeArray(array $Campaign)
    {
        $prev = $this->Campaign;
        $this->Campaign = $Campaign;
        return $prev;
    }

}
