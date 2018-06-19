<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfRuleItem implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return RuleItem Return the current element
     */
    public function current()
    {
      return current($this->RuleItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleItem);
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
      reset($this->RuleItem);
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

}
