<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEditorialReason implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EditorialReason[] $EditorialReason
     */
    protected $EditorialReason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EditorialReason[]
     */
    public function getEditorialReason()
    {
      return $this->EditorialReason;
    }

    /**
     * @param EditorialReason[] $EditorialReason
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEditorialReason
     */
    public function setEditorialReason(array $EditorialReason = null)
    {
      $this->EditorialReason = $EditorialReason;
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
      return isset($this->EditorialReason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EditorialReason
     */
    public function offsetGet($offset)
    {
      return $this->EditorialReason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EditorialReason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EditorialReason[] = $value;
      } else {
        $this->EditorialReason[$offset] = $value;
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
      unset($this->EditorialReason[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EditorialReason Return the current element
     */
    public function current()
    {
      return current($this->EditorialReason);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EditorialReason);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EditorialReason);
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
      reset($this->EditorialReason);
    }

    /**
     * Countable implementation
     *
     * @return EditorialReason Return count of elements
     */
    public function count()
    {
      return count($this->EditorialReason);
    }

}
