<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBroadMatchSearchQueryKPI implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return BroadMatchSearchQueryKPI[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BroadMatchSearchQueryKPI);
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

    /**
     * Change the current array with another
     *
     * @return BroadMatchSearchQueryKPI[]|null The previous array if present
     */
    public function exchangeArray(array $BroadMatchSearchQueryKPI)
    {
        $prev = $this->BroadMatchSearchQueryKPI;
        $this->BroadMatchSearchQueryKPI = $BroadMatchSearchQueryKPI;
        return $prev;
    }

}
