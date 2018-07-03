<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfUserInfo implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var UserInfo[] $UserInfo
     */
    protected $UserInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserInfo[]
     */
    public function getUserInfo()
    {
      return $this->UserInfo;
    }

    /**
     * @param UserInfo[] $UserInfo
     * @return \PMG\BingAds\CustomerManagement\ArrayOfUserInfo
     */
    public function setUserInfo(array $UserInfo = null)
    {
      $this->UserInfo = $UserInfo;
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
      return isset($this->UserInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserInfo
     */
    public function offsetGet($offset)
    {
      return $this->UserInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UserInfo[] = $value;
      } else {
        $this->UserInfo[$offset] = $value;
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
      unset($this->UserInfo[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return UserInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->UserInfo);
    }

    /**
     * Countable implementation
     *
     * @return UserInfo Return count of elements
     */
    public function count()
    {
      return count($this->UserInfo);
    }

    /**
     * Change the current array with another
     *
     * @return UserInfo[]|null The previous array if present
     */
    public function exchangeArray(array $UserInfo)
    {
        $prev = $this->UserInfo;
        $this->UserInfo = $UserInfo;
        return $prev;
    }

}
