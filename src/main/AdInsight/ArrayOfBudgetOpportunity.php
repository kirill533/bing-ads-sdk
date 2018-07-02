<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBudgetOpportunity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BudgetOpportunity[] $BudgetOpportunity
     */
    protected $BudgetOpportunity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetOpportunity[]
     */
    public function getBudgetOpportunity()
    {
      return $this->BudgetOpportunity;
    }

    /**
     * @param BudgetOpportunity[] $BudgetOpportunity
     * @return \PMG\BingAds\AdInsight\ArrayOfBudgetOpportunity
     */
    public function setBudgetOpportunity(array $BudgetOpportunity = null)
    {
      $this->BudgetOpportunity = $BudgetOpportunity;
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
      return isset($this->BudgetOpportunity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetOpportunity
     */
    public function offsetGet($offset)
    {
      return $this->BudgetOpportunity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetOpportunity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BudgetOpportunity[] = $value;
      } else {
        $this->BudgetOpportunity[$offset] = $value;
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
      unset($this->BudgetOpportunity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BudgetOpportunity Return the current element
     */
    public function current()
    {
      return current($this->BudgetOpportunity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BudgetOpportunity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BudgetOpportunity);
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
      reset($this->BudgetOpportunity);
    }

    /**
     * Countable implementation
     *
     * @return BudgetOpportunity Return count of elements
     */
    public function count()
    {
      return count($this->BudgetOpportunity);
    }

}
