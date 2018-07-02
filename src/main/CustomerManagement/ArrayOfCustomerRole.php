<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfCustomerRole implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return CustomerRole Return the current element
     */
    public function current()
    {
      return current($this->CustomerRole);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomerRole);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomerRole);
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
      reset($this->CustomerRole);
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

}
