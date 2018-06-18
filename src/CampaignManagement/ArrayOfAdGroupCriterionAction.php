<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdGroupCriterionAction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupCriterionAction[] $AdGroupCriterionAction
     */
    protected $AdGroupCriterionAction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupCriterionAction[]
     */
    public function getAdGroupCriterionAction()
    {
      return $this->AdGroupCriterionAction;
    }

    /**
     * @param AdGroupCriterionAction[] $AdGroupCriterionAction
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdGroupCriterionAction
     */
    public function setAdGroupCriterionAction(array $AdGroupCriterionAction = null)
    {
      $this->AdGroupCriterionAction = $AdGroupCriterionAction;
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
      return isset($this->AdGroupCriterionAction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupCriterionAction
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupCriterionAction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupCriterionAction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupCriterionAction[] = $value;
      } else {
        $this->AdGroupCriterionAction[$offset] = $value;
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
      unset($this->AdGroupCriterionAction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupCriterionAction Return the current element
     */
    public function current()
    {
      return current($this->AdGroupCriterionAction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupCriterionAction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupCriterionAction);
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
      reset($this->AdGroupCriterionAction);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupCriterionAction Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupCriterionAction);
    }

}
