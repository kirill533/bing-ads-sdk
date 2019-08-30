<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdGroupCriterion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdGroupCriterion[] $AdGroupCriterion
     */
    protected $AdGroupCriterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupCriterion[]
     */
    public function getAdGroupCriterion()
    {
        return $this->AdGroupCriterion;
    }

    /**
     * @param AdGroupCriterion[] $AdGroupCriterion
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdGroupCriterion
     */
    public function setAdGroupCriterion(array $AdGroupCriterion = null)
    {
        $this->AdGroupCriterion = $AdGroupCriterion;
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
      return isset($this->AdGroupCriterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupCriterion
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupCriterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupCriterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupCriterion[] = $value;
      } else {
        $this->AdGroupCriterion[$offset] = $value;
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
      unset($this->AdGroupCriterion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdGroupCriterion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupCriterion);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupCriterion Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupCriterion);
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupCriterion[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupCriterion)
    {
        $prev = $this->AdGroupCriterion;
        $this->AdGroupCriterion = $AdGroupCriterion;
        return $prev;
    }

}
