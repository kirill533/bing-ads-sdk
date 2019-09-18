<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBudgetOpportunity implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return BudgetOpportunity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BudgetOpportunity ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BudgetOpportunity Return count of elements
     */
    public function count()
    {
        return is_array($this->BudgetOpportunity) ? count($this->BudgetOpportunity) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BudgetOpportunity[]|null The previous array if present
     */
    public function exchangeArray(array $BudgetOpportunity)
    {
        $prev = $this->BudgetOpportunity;
        $this->BudgetOpportunity = $BudgetOpportunity;
        return $prev;
    }

}
