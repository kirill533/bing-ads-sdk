<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAddress implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return \PMG\BingAds\CustomerManagement\ArrayOfAddress
     */
    public function setAddress(array $Address = null)
    {
        $this->Address = $Address;
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
      return isset($this->Address[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Address
     */
    public function offsetGet($offset)
    {
      return $this->Address[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Address $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Address[] = $value;
      } else {
        $this->Address[$offset] = $value;
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
      unset($this->Address[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Address[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Address);
    }

    /**
     * Countable implementation
     *
     * @return Address Return count of elements
     */
    public function count()
    {
      return count($this->Address);
    }

    /**
     * Change the current array with another
     *
     * @return Address[]|null The previous array if present
     */
    public function exchangeArray(array $Address)
    {
        $prev = $this->Address;
        $this->Address = $Address;
        return $prev;
    }

}
