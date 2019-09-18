<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignNegativeSites implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CampaignNegativeSites[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignNegativeSites ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CampaignNegativeSites Return count of elements
     */
    public function count()
    {
        return is_array($this->CampaignNegativeSites) ? count($this->CampaignNegativeSites) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CampaignNegativeSites[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignNegativeSites)
    {
        $prev = $this->CampaignNegativeSites;
        $this->CampaignNegativeSites = $CampaignNegativeSites;
        return $prev;
    }

}
