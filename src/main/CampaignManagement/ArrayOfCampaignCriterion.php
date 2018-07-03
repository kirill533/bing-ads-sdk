<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignCriterion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CampaignCriterion[] $CampaignCriterion
     */
    protected $CampaignCriterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignCriterion[]
     */
    public function getCampaignCriterion()
    {
      return $this->CampaignCriterion;
    }

    /**
     * @param CampaignCriterion[] $CampaignCriterion
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaignCriterion
     */
    public function setCampaignCriterion(array $CampaignCriterion = null)
    {
      $this->CampaignCriterion = $CampaignCriterion;
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
      return isset($this->CampaignCriterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignCriterion
     */
    public function offsetGet($offset)
    {
      return $this->CampaignCriterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignCriterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignCriterion[] = $value;
      } else {
        $this->CampaignCriterion[$offset] = $value;
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
      unset($this->CampaignCriterion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CampaignCriterion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignCriterion);
    }

    /**
     * Countable implementation
     *
     * @return CampaignCriterion Return count of elements
     */
    public function count()
    {
      return count($this->CampaignCriterion);
    }

    /**
     * Change the current array with another
     *
     * @return CampaignCriterion[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignCriterion)
    {
        $prev = $this->CampaignCriterion;
        $this->CampaignCriterion = $CampaignCriterion;
        return $prev;
    }

}
