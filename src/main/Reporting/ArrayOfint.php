<?php

namespace PMG\BingAds\Reporting;

class ArrayOfint implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var int[] $int
     */
    protected $int = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getInt()
    {
      return $this->int;
    }

    /**
     * @param int[] $int
     * @return \PMG\BingAds\Reporting\ArrayOfint
     */
    public function setInt(array $int = null)
    {
      $this->int = $int;
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
      return isset($this->int[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return int
     */
    public function offsetGet($offset)
    {
      return $this->int[$offset];
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
        $this->int[] = $value;
      } else {
        $this->int[$offset] = $value;
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
      unset($this->int[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return int[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->int);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count()
    {
      return count($this->int);
    }

    /**
     * Change the current array with another
     *
     * @return int[]|null The previous array if present
     */
    public function exchangeArray(array $int)
    {
        $prev = $this->int;
        $this->int = $int;
        return $prev;
    }

}
