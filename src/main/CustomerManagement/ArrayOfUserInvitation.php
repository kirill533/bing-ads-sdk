<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfUserInvitation implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return UserInvitation Return the current element
     */
    public function current()
    {
      return current($this->UserInvitation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UserInvitation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UserInvitation);
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
      reset($this->UserInvitation);
    }

    /**
     * Countable implementation
     *
     * @return UserInvitation Return count of elements
     */
    public function count()
    {
      return count($this->UserInvitation);
    }

}
