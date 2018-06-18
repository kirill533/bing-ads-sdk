<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfBudget implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfBudget
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
     * Iterator implementation
     *
     * @return Budget Return the current element
     */
    public function current()
    {
      return current($this->Budget);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Budget);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Budget);
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
      reset($this->Budget);
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

}
