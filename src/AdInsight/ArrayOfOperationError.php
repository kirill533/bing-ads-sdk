<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfOperationError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OperationError[] $OperationError
     */
    protected $OperationError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OperationError[]
     */
    public function getOperationError()
    {
      return $this->OperationError;
    }

    /**
     * @param OperationError[] $OperationError
     * @return \PMG\BingAds\AdInsight\ArrayOfOperationError
     */
    public function setOperationError(array $OperationError = null)
    {
      $this->OperationError = $OperationError;
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
      return isset($this->OperationError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OperationError
     */
    public function offsetGet($offset)
    {
      return $this->OperationError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OperationError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OperationError[] = $value;
      } else {
        $this->OperationError[$offset] = $value;
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
      unset($this->OperationError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OperationError Return the current element
     */
    public function current()
    {
      return current($this->OperationError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OperationError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OperationError);
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
      reset($this->OperationError);
    }

    /**
     * Countable implementation
     *
     * @return OperationError Return count of elements
     */
    public function count()
    {
      return count($this->OperationError);
    }

}
