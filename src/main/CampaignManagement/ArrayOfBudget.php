<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBudget implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Budget[] $Budget
     */
    protected $Budget = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Budget[]
     */
    public function getBudget()
    {
        return $this->Budget;
    }

    /**
     * @param Budget[] $Budget
     * @return \PMG\BingAds\CampaignManagement\ArrayOfBudget
     */
    public function setBudget(array $Budget = null)
    {
        $this->Budget = $Budget;
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
      return isset($this->Budget[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Budget
     */
    public function offsetGet($offset)
    {
      return $this->Budget[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Budget $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Budget[] = $value;
      } else {
        $this->Budget[$offset] = $value;
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
      unset($this->Budget[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Budget[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Budget);
    }

    /**
     * Countable implementation
     *
     * @return Budget Return count of elements
     */
    public function count()
    {
      return count($this->Budget);
    }

    /**
     * Change the current array with another
     *
     * @return Budget[]|null The previous array if present
     */
    public function exchangeArray(array $Budget)
    {
        $prev = $this->Budget;
        $this->Budget = $Budget;
        return $prev;
    }

}
