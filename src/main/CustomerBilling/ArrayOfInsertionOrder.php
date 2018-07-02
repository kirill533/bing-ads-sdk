<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOfInsertionOrder implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return InsertionOrder Return the current element
     */
    public function current()
    {
      return current($this->InsertionOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InsertionOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InsertionOrder);
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
      reset($this->InsertionOrder);
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

}
