<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfAdvertiserAccount implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdvertiserAccount[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdvertiserAccount ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdvertiserAccount Return count of elements
     */
    public function count()
    {
        return is_array($this->AdvertiserAccount) ? count($this->AdvertiserAccount) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdvertiserAccount[]|null The previous array if present
     */
    public function exchangeArray(array $AdvertiserAccount)
    {
        $prev = $this->AdvertiserAccount;
        $this->AdvertiserAccount = $AdvertiserAccount;
        return $prev;
    }

}
