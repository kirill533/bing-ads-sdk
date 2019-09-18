<?php

namespace PMG\BingAds\Reporting;

class ArrayOfBatchError implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\Reporting\ArrayOfBatchError
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
     * Traversable Implementation
     *
     * @return BatchError[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BatchError ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BatchError Return count of elements
     */
    public function count()
    {
        return is_array($this->BatchError) ? count($this->BatchError) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BatchError[]|null The previous array if present
     */
    public function exchangeArray(array $BatchError)
    {
        $prev = $this->BatchError;
        $this->BatchError = $BatchError;
        return $prev;
    }

}
