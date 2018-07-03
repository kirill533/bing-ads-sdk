<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdGroupNegativeSites implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdGroupNegativeSites[] $AdGroupNegativeSites
     */
    protected $AdGroupNegativeSites = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupNegativeSites[]
     */
    public function getAdGroupNegativeSites()
    {
      return $this->AdGroupNegativeSites;
    }

    /**
     * @param AdGroupNegativeSites[] $AdGroupNegativeSites
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdGroupNegativeSites
     */
    public function setAdGroupNegativeSites(array $AdGroupNegativeSites = null)
    {
      $this->AdGroupNegativeSites = $AdGroupNegativeSites;
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
      return isset($this->AdGroupNegativeSites[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupNegativeSites
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupNegativeSites[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupNegativeSites $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupNegativeSites[] = $value;
      } else {
        $this->AdGroupNegativeSites[$offset] = $value;
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
      unset($this->AdGroupNegativeSites[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdGroupNegativeSites[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupNegativeSites);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupNegativeSites Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupNegativeSites);
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupNegativeSites[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupNegativeSites)
    {
        $prev = $this->AdGroupNegativeSites;
        $this->AdGroupNegativeSites = $AdGroupNegativeSites;
        return $prev;
    }

}
