<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAdvertiserAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdvertiserAccount[] $AdvertiserAccount
     */
    protected $AdvertiserAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdvertiserAccount[]
     */
    public function getAdvertiserAccount()
    {
      return $this->AdvertiserAccount;
    }

    /**
     * @param AdvertiserAccount[] $AdvertiserAccount
     * @return \PMG\BingAds\CustomerManagement\ArrayOfAdvertiserAccount
     */
    public function setAdvertiserAccount(array $AdvertiserAccount = null)
    {
      $this->AdvertiserAccount = $AdvertiserAccount;
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
      return isset($this->AdvertiserAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdvertiserAccount
     */
    public function offsetGet($offset)
    {
      return $this->AdvertiserAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdvertiserAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdvertiserAccount[] = $value;
      } else {
        $this->AdvertiserAccount[$offset] = $value;
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
      unset($this->AdvertiserAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdvertiserAccount Return the current element
     */
    public function current()
    {
      return current($this->AdvertiserAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdvertiserAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdvertiserAccount);
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
      reset($this->AdvertiserAccount);
    }

    /**
     * Countable implementation
     *
     * @return AdvertiserAccount Return count of elements
     */
    public function count()
    {
      return count($this->AdvertiserAccount);
    }

}
