<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfDomainCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainCategory[] $DomainCategory
     */
    protected $DomainCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainCategory[]
     */
    public function getDomainCategory()
    {
      return $this->DomainCategory;
    }

    /**
     * @param DomainCategory[] $DomainCategory
     * @return \PMG\BingAds\AdInsight\ArrayOfDomainCategory
     */
    public function setDomainCategory(array $DomainCategory = null)
    {
      $this->DomainCategory = $DomainCategory;
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
      return isset($this->DomainCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainCategory
     */
    public function offsetGet($offset)
    {
      return $this->DomainCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainCategory[] = $value;
      } else {
        $this->DomainCategory[$offset] = $value;
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
      unset($this->DomainCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainCategory Return the current element
     */
    public function current()
    {
      return current($this->DomainCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainCategory);
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
      reset($this->DomainCategory);
    }

    /**
     * Countable implementation
     *
     * @return DomainCategory Return count of elements
     */
    public function count()
    {
      return count($this->DomainCategory);
    }

}
