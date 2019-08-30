<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBudgetPoint implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BudgetPoint[] $BudgetPoint
     */
    protected $BudgetPoint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetPoint[]
     */
    public function getBudgetPoint()
    {
        return $this->BudgetPoint;
    }

    /**
     * @param BudgetPoint[] $BudgetPoint
     * @return \PMG\BingAds\AdInsight\ArrayOfBudgetPoint
     */
    public function setBudgetPoint(array $BudgetPoint = null)
    {
        $this->BudgetPoint = $BudgetPoint;
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
      return isset($this->BudgetPoint[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetPoint
     */
    public function offsetGet($offset)
    {
      return $this->BudgetPoint[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetPoint $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BudgetPoint[] = $value;
      } else {
        $this->BudgetPoint[$offset] = $value;
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
      unset($this->BudgetPoint[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BudgetPoint[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BudgetPoint);
    }

    /**
     * Countable implementation
     *
     * @return BudgetPoint Return count of elements
     */
    public function count()
    {
      return count($this->BudgetPoint);
    }

    /**
     * Change the current array with another
     *
     * @return BudgetPoint[]|null The previous array if present
     */
    public function exchangeArray(array $BudgetPoint)
    {
        $prev = $this->BudgetPoint;
        $this->BudgetPoint = $BudgetPoint;
        return $prev;
    }

}
