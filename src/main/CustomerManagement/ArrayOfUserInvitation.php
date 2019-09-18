<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfUserInvitation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var UserInvitation[] $UserInvitation
     */
    protected $UserInvitation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserInvitation[]
     */
    public function getUserInvitation()
    {
        return $this->UserInvitation;
    }

    /**
     * @param UserInvitation[] $UserInvitation
     * @return \PMG\BingAds\CustomerManagement\ArrayOfUserInvitation
     */
    public function setUserInvitation(array $UserInvitation = null)
    {
        $this->UserInvitation = $UserInvitation;
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
      return isset($this->UserInvitation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserInvitation
     */
    public function offsetGet($offset)
    {
      return $this->UserInvitation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserInvitation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UserInvitation[] = $value;
      } else {
        $this->UserInvitation[$offset] = $value;
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
      unset($this->UserInvitation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return UserInvitation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->UserInvitation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return UserInvitation Return count of elements
     */
    public function count()
    {
        return is_array($this->UserInvitation) ? count($this->UserInvitation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return UserInvitation[]|null The previous array if present
     */
    public function exchangeArray(array $UserInvitation)
    {
        $prev = $this->UserInvitation;
        $this->UserInvitation = $UserInvitation;
        return $prev;
    }

}
