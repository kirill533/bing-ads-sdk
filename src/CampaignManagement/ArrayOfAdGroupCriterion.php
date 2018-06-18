<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdGroupCriterion implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdGroupCriterion
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
     * Iterator implementation
     *
     * @return AdGroupCriterion Return the current element
     */
    public function current()
    {
      return current($this->AdGroupCriterion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupCriterion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupCriterion);
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
      reset($this->AdGroupCriterion);
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

}
