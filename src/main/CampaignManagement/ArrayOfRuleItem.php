<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfRuleItem implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var RuleItem[] $RuleItem
     */
    protected $RuleItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleItem[]
     */
    public function getRuleItem()
    {
      return $this->RuleItem;
    }

    /**
     * @param RuleItem[] $RuleItem
     * @return \PMG\BingAds\CampaignManagement\ArrayOfRuleItem
     */
    public function setRuleItem(array $RuleItem = null)
    {
      $this->RuleItem = $RuleItem;
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
      return isset($this->RuleItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleItem
     */
    public function offsetGet($offset)
    {
      return $this->RuleItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleItem[] = $value;
      } else {
        $this->RuleItem[$offset] = $value;
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
      unset($this->RuleItem[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return RuleItem[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->RuleItem);
    }

    /**
     * Countable implementation
     *
     * @return RuleItem Return count of elements
     */
    public function count()
    {
      return count($this->RuleItem);
    }

    /**
     * Change the current array with another
     *
     * @return RuleItem[]|null The previous array if present
     */
    public function exchangeArray(array $RuleItem)
    {
        $prev = $this->RuleItem;
        $this->RuleItem = $RuleItem;
        return $prev;
    }

}
