<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfPredicate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Predicate[] $Predicate
     */
    protected $Predicate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Predicate[]
     */
    public function getPredicate()
    {
      return $this->Predicate;
    }

    /**
     * @param Predicate[] $Predicate
     * @return \PMG\BingAds\CustomerManagement\ArrayOfPredicate
     */
    public function setPredicate(array $Predicate = null)
    {
      $this->Predicate = $Predicate;
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
      return isset($this->Predicate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Predicate
     */
    public function offsetGet($offset)
    {
      return $this->Predicate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Predicate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Predicate[] = $value;
      } else {
        $this->Predicate[$offset] = $value;
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
      unset($this->Predicate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Predicate Return the current element
     */
    public function current()
    {
      return current($this->Predicate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Predicate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Predicate);
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
      reset($this->Predicate);
    }

    /**
     * Countable implementation
     *
     * @return Predicate Return count of elements
     */
    public function count()
    {
      return count($this->Predicate);
    }

}
