<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfCustomer implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Customer[] $Customer
     */
    protected $Customer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Customer[]
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param Customer[] $Customer
     * @return \PMG\BingAds\CustomerManagement\ArrayOfCustomer
     */
    public function setCustomer(array $Customer = null)
    {
        $this->Customer = $Customer;
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
      return isset($this->Customer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Customer
     */
    public function offsetGet($offset)
    {
      return $this->Customer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Customer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Customer[] = $value;
      } else {
        $this->Customer[$offset] = $value;
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
      unset($this->Customer[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Customer[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Customer);
    }

    /**
     * Countable implementation
     *
     * @return Customer Return count of elements
     */
    public function count()
    {
      return count($this->Customer);
    }

    /**
     * Change the current array with another
     *
     * @return Customer[]|null The previous array if present
     */
    public function exchangeArray(array $Customer)
    {
        $prev = $this->Customer;
        $this->Customer = $Customer;
        return $prev;
    }

}
