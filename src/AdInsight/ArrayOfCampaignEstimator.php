<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCampaignEstimator implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignEstimator[] $CampaignEstimator
     */
    protected $CampaignEstimator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignEstimator[]
     */
    public function getCampaignEstimator()
    {
      return $this->CampaignEstimator;
    }

    /**
     * @param CampaignEstimator[] $CampaignEstimator
     * @return \PMG\BingAds\AdInsight\ArrayOfCampaignEstimator
     */
    public function setCampaignEstimator(array $CampaignEstimator = null)
    {
      $this->CampaignEstimator = $CampaignEstimator;
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
      return isset($this->CampaignEstimator[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignEstimator
     */
    public function offsetGet($offset)
    {
      return $this->CampaignEstimator[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignEstimator $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignEstimator[] = $value;
      } else {
        $this->CampaignEstimator[$offset] = $value;
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
      unset($this->CampaignEstimator[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignEstimator Return the current element
     */
    public function current()
    {
      return current($this->CampaignEstimator);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignEstimator);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignEstimator);
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
      reset($this->CampaignEstimator);
    }

    /**
     * Countable implementation
     *
     * @return CampaignEstimator Return count of elements
     */
    public function count()
    {
      return count($this->CampaignEstimator);
    }

}
