<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfOperationError implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return OperationError[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->OperationError);
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

    /**
     * Change the current array with another
     *
     * @return OperationError[]|null The previous array if present
     */
    public function exchangeArray(array $OperationError)
    {
        $prev = $this->OperationError;
        $this->OperationError = $OperationError;
        return $prev;
    }

}
