<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignNegativeSites implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignNegativeSites[] $CampaignNegativeSites
     */
    protected $CampaignNegativeSites = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignNegativeSites[]
     */
    public function getCampaignNegativeSites()
    {
      return $this->CampaignNegativeSites;
    }

    /**
     * @param CampaignNegativeSites[] $CampaignNegativeSites
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaignNegativeSites
     */
    public function setCampaignNegativeSites(array $CampaignNegativeSites = null)
    {
      $this->CampaignNegativeSites = $CampaignNegativeSites;
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
      return isset($this->CampaignNegativeSites[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignNegativeSites
     */
    public function offsetGet($offset)
    {
      return $this->CampaignNegativeSites[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignNegativeSites $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignNegativeSites[] = $value;
      } else {
        $this->CampaignNegativeSites[$offset] = $value;
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
      unset($this->CampaignNegativeSites[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignNegativeSites Return the current element
     */
    public function current()
    {
      return current($this->CampaignNegativeSites);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignNegativeSites);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignNegativeSites);
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
      reset($this->CampaignNegativeSites);
    }

    /**
     * Countable implementation
     *
     * @return CampaignNegativeSites Return count of elements
     */
    public function count()
    {
      return count($this->CampaignNegativeSites);
    }

}
