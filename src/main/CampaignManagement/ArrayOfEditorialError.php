<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEditorialError implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return EditorialError[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EditorialError);
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

    /**
     * Change the current array with another
     *
     * @return EditorialError[]|null The previous array if present
     */
    public function exchangeArray(array $EditorialError)
    {
        $prev = $this->EditorialError;
        $this->EditorialError = $EditorialError;
        return $prev;
    }

}
