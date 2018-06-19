<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEditorialError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EditorialError[] $EditorialError
     */
    protected $EditorialError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EditorialError[]
     */
    public function getEditorialError()
    {
      return $this->EditorialError;
    }

    /**
     * @param EditorialError[] $EditorialError
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEditorialError
     */
    public function setEditorialError(array $EditorialError = null)
    {
      $this->EditorialError = $EditorialError;
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
      return isset($this->EditorialError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EditorialError
     */
    public function offsetGet($offset)
    {
      return $this->EditorialError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EditorialError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EditorialError[] = $value;
      } else {
        $this->EditorialError[$offset] = $value;
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
      unset($this->EditorialError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EditorialError Return the current element
     */
    public function current()
    {
      return current($this->EditorialError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EditorialError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EditorialError);
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
      reset($this->EditorialError);
    }

    /**
     * Countable implementation
     *
     * @return EditorialError Return count of elements
     */
    public function count()
    {
      return count($this->EditorialError);
    }

}
