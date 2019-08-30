<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfCustomerRole implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CustomerRole[] $CustomerRole
     */
    protected $CustomerRole = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerRole[]
     */
    public function getCustomerRole()
    {
        return $this->CustomerRole;
    }

    /**
     * @param CustomerRole[] $CustomerRole
     * @return \PMG\BingAds\CustomerManagement\ArrayOfCustomerRole
     */
    public function setCustomerRole(array $CustomerRole = null)
    {
        $this->CustomerRole = $CustomerRole;
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
      return isset($this->CustomerRole[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerRole
     */
    public function offsetGet($offset)
    {
      return $this->CustomerRole[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerRole $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerRole[] = $value;
      } else {
        $this->CustomerRole[$offset] = $value;
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
      unset($this->CustomerRole[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CustomerRole[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CustomerRole);
    }

    /**
     * Countable implementation
     *
     * @return CustomerRole Return count of elements
     */
    public function count()
    {
      return count($this->CustomerRole);
    }

    /**
     * Change the current array with another
     *
     * @return CustomerRole[]|null The previous array if present
     */
    public function exchangeArray(array $CustomerRole)
    {
        $prev = $this->CustomerRole;
        $this->CustomerRole = $CustomerRole;
        return $prev;
    }

}
