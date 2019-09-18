<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdGroupCriterionAction implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdGroupCriterionAction
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
     * Traversable Implementation
     *
     * @return AdGroupCriterionAction[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupCriterionAction ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupCriterionAction Return count of elements
     */
    public function count()
    {
        return is_array($this->AdGroupCriterionAction) ? count($this->AdGroupCriterionAction) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupCriterionAction[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupCriterionAction)
    {
        $prev = $this->AdGroupCriterionAction;
        $this->AdGroupCriterionAction = $AdGroupCriterionAction;
        return $prev;
    }

}
