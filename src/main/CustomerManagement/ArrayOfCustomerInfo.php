<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfCustomerInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomerInfo[] $CustomerInfo
     */
    protected $CustomerInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerInfo[]
     */
    public function getCustomerInfo()
    {
      return $this->CustomerInfo;
    }

    /**
     * @param CustomerInfo[] $CustomerInfo
     * @return \PMG\BingAds\CustomerManagement\ArrayOfCustomerInfo
     */
    public function setCustomerInfo(array $CustomerInfo = null)
    {
      $this->CustomerInfo = $CustomerInfo;
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
      return isset($this->CustomerInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerInfo
     */
    public function offsetGet($offset)
    {
      return $this->CustomerInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerInfo[] = $value;
      } else {
        $this->CustomerInfo[$offset] = $value;
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
      unset($this->CustomerInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomerInfo Return the current element
     */
    public function current()
    {
      return current($this->CustomerInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomerInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomerInfo);
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
      reset($this->CustomerInfo);
    }

    /**
     * Countable implementation
     *
     * @return CustomerInfo Return count of elements
     */
    public function count()
    {
      return count($this->CustomerInfo);
    }

}
