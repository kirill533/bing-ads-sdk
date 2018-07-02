<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfBatchError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BatchError[] $BatchError
     */
    protected $BatchError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BatchError[]
     */
    public function getBatchError()
    {
      return $this->BatchError;
    }

    /**
     * @param BatchError[] $BatchError
     * @return \PMG\BingAds\AdInsight\ArrayOfBatchError
     */
    public function setBatchError(array $BatchError = null)
    {
      $this->BatchError = $BatchError;
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
      return isset($this->BatchError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BatchError
     */
    public function offsetGet($offset)
    {
      return $this->BatchError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BatchError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BatchError[] = $value;
      } else {
        $this->BatchError[$offset] = $value;
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
      unset($this->BatchError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BatchError Return the current element
     */
    public function current()
    {
      return current($this->BatchError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BatchError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BatchError);
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
      reset($this->BatchError);
    }

    /**
     * Countable implementation
     *
     * @return BatchError Return count of elements
     */
    public function count()
    {
      return count($this->BatchError);
    }

}
