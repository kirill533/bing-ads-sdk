<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfInsertionOrder implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var InsertionOrder[] $InsertionOrder
     */
    protected $InsertionOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InsertionOrder[]
     */
    public function getInsertionOrder()
    {
        return $this->InsertionOrder;
    }

    /**
     * @param InsertionOrder[] $InsertionOrder
     * @return \PMG\BingAds\CustomerBilling\ArrayOfInsertionOrder
     */
    public function setInsertionOrder(array $InsertionOrder = null)
    {
        $this->InsertionOrder = $InsertionOrder;
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
      return isset($this->InsertionOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InsertionOrder
     */
    public function offsetGet($offset)
    {
      return $this->InsertionOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InsertionOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InsertionOrder[] = $value;
      } else {
        $this->InsertionOrder[$offset] = $value;
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
      unset($this->InsertionOrder[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return InsertionOrder[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->InsertionOrder);
    }

    /**
     * Countable implementation
     *
     * @return InsertionOrder Return count of elements
     */
    public function count()
    {
      return count($this->InsertionOrder);
    }

    /**
     * Change the current array with another
     *
     * @return InsertionOrder[]|null The previous array if present
     */
    public function exchangeArray(array $InsertionOrder)
    {
        $prev = $this->InsertionOrder;
        $this->InsertionOrder = $InsertionOrder;
        return $prev;
    }

}
