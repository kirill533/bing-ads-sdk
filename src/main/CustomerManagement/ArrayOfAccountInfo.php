<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAccountInfo implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AccountInfo[] $AccountInfo
     */
    protected $AccountInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountInfo[]
     */
    public function getAccountInfo()
    {
      return $this->AccountInfo;
    }

    /**
     * @param AccountInfo[] $AccountInfo
     * @return \PMG\BingAds\CustomerManagement\ArrayOfAccountInfo
     */
    public function setAccountInfo(array $AccountInfo = null)
    {
      $this->AccountInfo = $AccountInfo;
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
      return isset($this->AccountInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountInfo
     */
    public function offsetGet($offset)
    {
      return $this->AccountInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountInfo[] = $value;
      } else {
        $this->AccountInfo[$offset] = $value;
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
      unset($this->AccountInfo[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AccountInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountInfo);
    }

    /**
     * Countable implementation
     *
     * @return AccountInfo Return count of elements
     */
    public function count()
    {
      return count($this->AccountInfo);
    }

    /**
     * Change the current array with another
     *
     * @return AccountInfo[]|null The previous array if present
     */
    public function exchangeArray(array $AccountInfo)
    {
        $prev = $this->AccountInfo;
        $this->AccountInfo = $AccountInfo;
        return $prev;
    }

}
