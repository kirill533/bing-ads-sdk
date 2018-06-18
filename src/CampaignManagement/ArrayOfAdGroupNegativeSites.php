<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdGroupNegativeSites implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdGroupNegativeSites
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
     * Iterator implementation
     *
     * @return AdGroupNegativeSites Return the current element
     */
    public function current()
    {
      return current($this->AdGroupNegativeSites);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupNegativeSites);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupNegativeSites);
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
      reset($this->AdGroupNegativeSites);
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

}
