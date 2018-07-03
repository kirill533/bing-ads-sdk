<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCampaignEstimator implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CampaignEstimator[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignEstimator);
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

    /**
     * Change the current array with another
     *
     * @return CampaignEstimator[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignEstimator)
    {
        $prev = $this->CampaignEstimator;
        $this->CampaignEstimator = $CampaignEstimator;
        return $prev;
    }

}
