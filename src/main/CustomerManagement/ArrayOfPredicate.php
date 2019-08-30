<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfPredicate implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return Predicate[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Predicate);
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

    /**
     * Change the current array with another
     *
     * @return Predicate[]|null The previous array if present
     */
    public function exchangeArray(array $Predicate)
    {
        $prev = $this->Predicate;
        $this->Predicate = $Predicate;
        return $prev;
    }

}
