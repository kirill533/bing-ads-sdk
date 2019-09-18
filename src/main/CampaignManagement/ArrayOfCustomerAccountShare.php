<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCustomerAccountShare implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CustomerAccountShare[] $CustomerAccountShare
     */
    protected $CustomerAccountShare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerAccountShare[]
     */
    public function getCustomerAccountShare()
    {
        return $this->CustomerAccountShare;
    }

    /**
     * @param CustomerAccountShare[] $CustomerAccountShare
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCustomerAccountShare
     */
    public function setCustomerAccountShare(array $CustomerAccountShare = null)
    {
        $this->CustomerAccountShare = $CustomerAccountShare;
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
      return isset($this->CustomerAccountShare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomerAccountShare
     */
    public function offsetGet($offset)
    {
      return $this->CustomerAccountShare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomerAccountShare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomerAccountShare[] = $value;
      } else {
        $this->CustomerAccountShare[$offset] = $value;
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
      unset($this->CustomerAccountShare[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CustomerAccountShare[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CustomerAccountShare ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CustomerAccountShare Return count of elements
     */
    public function count()
    {
        return is_array($this->CustomerAccountShare) ? count($this->CustomerAccountShare) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CustomerAccountShare[]|null The previous array if present
     */
    public function exchangeArray(array $CustomerAccountShare)
    {
        $prev = $this->CustomerAccountShare;
        $this->CustomerAccountShare = $CustomerAccountShare;
        return $prev;
    }

}
