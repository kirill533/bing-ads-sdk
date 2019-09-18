<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfCustomerInfo implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CustomerInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CustomerInfo ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CustomerInfo Return count of elements
     */
    public function count()
    {
        return is_array($this->CustomerInfo) ? count($this->CustomerInfo) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CustomerInfo[]|null The previous array if present
     */
    public function exchangeArray(array $CustomerInfo)
    {
        $prev = $this->CustomerInfo;
        $this->CustomerInfo = $CustomerInfo;
        return $prev;
    }

}
