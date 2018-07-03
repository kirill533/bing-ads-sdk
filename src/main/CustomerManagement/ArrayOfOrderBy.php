<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfOrderBy implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var OrderBy[] $OrderBy
     */
    protected $OrderBy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderBy[]
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param OrderBy[] $OrderBy
     * @return \PMG\BingAds\CustomerManagement\ArrayOfOrderBy
     */
    public function setOrderBy(array $OrderBy = null)
    {
      $this->OrderBy = $OrderBy;
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
      return isset($this->OrderBy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderBy
     */
    public function offsetGet($offset)
    {
      return $this->OrderBy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderBy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderBy[] = $value;
      } else {
        $this->OrderBy[$offset] = $value;
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
      unset($this->OrderBy[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return OrderBy[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->OrderBy);
    }

    /**
     * Countable implementation
     *
     * @return OrderBy Return count of elements
     */
    public function count()
    {
      return count($this->OrderBy);
    }

    /**
     * Change the current array with another
     *
     * @return OrderBy[]|null The previous array if present
     */
    public function exchangeArray(array $OrderBy)
    {
        $prev = $this->OrderBy;
        $this->OrderBy = $OrderBy;
        return $prev;
    }

}
