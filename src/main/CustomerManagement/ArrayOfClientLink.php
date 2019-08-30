<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfClientLink implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ClientLink[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ClientLink);
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

    /**
     * Change the current array with another
     *
     * @return ClientLink[]|null The previous array if present
     */
    public function exchangeArray(array $ClientLink)
    {
        $prev = $this->ClientLink;
        $this->ClientLink = $ClientLink;
        return $prev;
    }

}
