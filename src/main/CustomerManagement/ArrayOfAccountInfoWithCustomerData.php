<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAccountInfoWithCustomerData implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AccountInfoWithCustomerData[] $AccountInfoWithCustomerData
     */
    protected $AccountInfoWithCustomerData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountInfoWithCustomerData[]
     */
    public function getAccountInfoWithCustomerData()
    {
        return $this->AccountInfoWithCustomerData;
    }

    /**
     * @param AccountInfoWithCustomerData[] $AccountInfoWithCustomerData
     * @return \PMG\BingAds\CustomerManagement\ArrayOfAccountInfoWithCustomerData
     */
    public function setAccountInfoWithCustomerData(array $AccountInfoWithCustomerData = null)
    {
        $this->AccountInfoWithCustomerData = $AccountInfoWithCustomerData;
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
      return isset($this->AccountInfoWithCustomerData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountInfoWithCustomerData
     */
    public function offsetGet($offset)
    {
      return $this->AccountInfoWithCustomerData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountInfoWithCustomerData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountInfoWithCustomerData[] = $value;
      } else {
        $this->AccountInfoWithCustomerData[$offset] = $value;
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
      unset($this->AccountInfoWithCustomerData[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AccountInfoWithCustomerData[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountInfoWithCustomerData ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AccountInfoWithCustomerData Return count of elements
     */
    public function count()
    {
        return is_array($this->AccountInfoWithCustomerData) ? count($this->AccountInfoWithCustomerData) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AccountInfoWithCustomerData[]|null The previous array if present
     */
    public function exchangeArray(array $AccountInfoWithCustomerData)
    {
        $prev = $this->AccountInfoWithCustomerData;
        $this->AccountInfoWithCustomerData = $AccountInfoWithCustomerData;
        return $prev;
    }

}
