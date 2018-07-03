<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfRuleItemGroup implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var RuleItemGroup[] $RuleItemGroup
     */
    protected $RuleItemGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleItemGroup[]
     */
    public function getRuleItemGroup()
    {
      return $this->RuleItemGroup;
    }

    /**
     * @param RuleItemGroup[] $RuleItemGroup
     * @return \PMG\BingAds\CampaignManagement\ArrayOfRuleItemGroup
     */
    public function setRuleItemGroup(array $RuleItemGroup = null)
    {
      $this->RuleItemGroup = $RuleItemGroup;
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
      return isset($this->RuleItemGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleItemGroup
     */
    public function offsetGet($offset)
    {
      return $this->RuleItemGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleItemGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleItemGroup[] = $value;
      } else {
        $this->RuleItemGroup[$offset] = $value;
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
      unset($this->RuleItemGroup[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return RuleItemGroup[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->RuleItemGroup);
    }

    /**
     * Countable implementation
     *
     * @return RuleItemGroup Return count of elements
     */
    public function count()
    {
      return count($this->RuleItemGroup);
    }

    /**
     * Change the current array with another
     *
     * @return RuleItemGroup[]|null The previous array if present
     */
    public function exchangeArray(array $RuleItemGroup)
    {
        $prev = $this->RuleItemGroup;
        $this->RuleItemGroup = $RuleItemGroup;
        return $prev;
    }

}
