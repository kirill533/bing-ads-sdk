<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfClientLink implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ClientLink[] $ClientLink
     */
    protected $ClientLink = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ClientLink[]
     */
    public function getClientLink()
    {
      return $this->ClientLink;
    }

    /**
     * @param ClientLink[] $ClientLink
     * @return \PMG\BingAds\CustomerManagement\ArrayOfClientLink
     */
    public function setClientLink(array $ClientLink = null)
    {
      $this->ClientLink = $ClientLink;
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
      return isset($this->ClientLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ClientLink
     */
    public function offsetGet($offset)
    {
      return $this->ClientLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ClientLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ClientLink[] = $value;
      } else {
        $this->ClientLink[$offset] = $value;
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
      unset($this->ClientLink[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ClientLink Return the current element
     */
    public function current()
    {
      return current($this->ClientLink);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ClientLink);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ClientLink);
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
      reset($this->ClientLink);
    }

    /**
     * Countable implementation
     *
     * @return ClientLink Return count of elements
     */
    public function count()
    {
      return count($this->ClientLink);
    }

}
