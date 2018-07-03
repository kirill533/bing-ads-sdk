<?php

namespace PMG\BingAds\CustomerBilling;

class ArrayOflong implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var int[] $long
     */
    protected $long = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getLong()
    {
      return $this->long;
    }

    /**
     * @param int[] $long
     * @return \PMG\BingAds\CustomerBilling\ArrayOflong
     */
    public function setLong(array $long = null)
    {
      $this->long = $long;
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
      return isset($this->long[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return long
     */
    public function offsetGet($offset)
    {
      return $this->long[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param int $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->long[] = $value;
      } else {
        $this->long[$offset] = $value;
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
      unset($this->long[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return long[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->long);
    }

    /**
     * Countable implementation
     *
     * @return long Return count of elements
     */
    public function count()
    {
      return count($this->long);
    }

    /**
     * Change the current array with another
     *
     * @return long[]|null The previous array if present
     */
    public function exchangeArray(array $long)
    {
        $prev = $this->long;
        $this->long = $long;
        return $prev;
    }

}
