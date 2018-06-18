<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBroadMatchSearchQueryKPI implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BroadMatchSearchQueryKPI[] $BroadMatchSearchQueryKPI
     */
    protected $BroadMatchSearchQueryKPI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BroadMatchSearchQueryKPI[]
     */
    public function getBroadMatchSearchQueryKPI()
    {
      return $this->BroadMatchSearchQueryKPI;
    }

    /**
     * @param BroadMatchSearchQueryKPI[] $BroadMatchSearchQueryKPI
     * @return \PMG\BingAds\AdInsight\ArrayOfBroadMatchSearchQueryKPI
     */
    public function setBroadMatchSearchQueryKPI(array $BroadMatchSearchQueryKPI = null)
    {
      $this->BroadMatchSearchQueryKPI = $BroadMatchSearchQueryKPI;
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
      return isset($this->BroadMatchSearchQueryKPI[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BroadMatchSearchQueryKPI
     */
    public function offsetGet($offset)
    {
      return $this->BroadMatchSearchQueryKPI[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BroadMatchSearchQueryKPI $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BroadMatchSearchQueryKPI[] = $value;
      } else {
        $this->BroadMatchSearchQueryKPI[$offset] = $value;
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
      unset($this->BroadMatchSearchQueryKPI[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BroadMatchSearchQueryKPI Return the current element
     */
    public function current()
    {
      return current($this->BroadMatchSearchQueryKPI);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BroadMatchSearchQueryKPI);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BroadMatchSearchQueryKPI);
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
      reset($this->BroadMatchSearchQueryKPI);
    }

    /**
     * Countable implementation
     *
     * @return BroadMatchSearchQueryKPI Return count of elements
     */
    public function count()
    {
      return count($this->BroadMatchSearchQueryKPI);
    }

}
