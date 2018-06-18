<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfCampaignCriterion implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfCampaignCriterion
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
     * Iterator implementation
     *
     * @return CampaignCriterion Return the current element
     */
    public function current()
    {
      return current($this->CampaignCriterion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignCriterion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignCriterion);
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
      reset($this->CampaignCriterion);
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

}
