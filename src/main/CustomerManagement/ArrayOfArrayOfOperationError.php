<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfArrayOfOperationError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfOperationError[] $ArrayOfOperationError
     */
    protected $ArrayOfOperationError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfOperationError[]
     */
    public function getArrayOfOperationError()
    {
      return $this->ArrayOfOperationError;
    }

    /**
     * @param ArrayOfOperationError[] $ArrayOfOperationError
     * @return \PMG\BingAds\CustomerManagement\ArrayOfArrayOfOperationError
     */
    public function setArrayOfOperationError(array $ArrayOfOperationError = null)
    {
      $this->ArrayOfOperationError = $ArrayOfOperationError;
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
      return isset($this->ArrayOfOperationError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfOperationError
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfOperationError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfOperationError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfOperationError[] = $value;
      } else {
        $this->ArrayOfOperationError[$offset] = $value;
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
      unset($this->ArrayOfOperationError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfOperationError Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfOperationError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfOperationError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfOperationError);
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
      reset($this->ArrayOfOperationError);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfOperationError Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfOperationError);
    }

}
