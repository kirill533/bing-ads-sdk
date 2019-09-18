<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfDomainCategory implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return DomainCategory[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DomainCategory ?? []);
    }

    /**
     * Countable implementation
     *
     * @return DomainCategory Return count of elements
     */
    public function count()
    {
        return is_array($this->DomainCategory) ? count($this->DomainCategory) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return DomainCategory[]|null The previous array if present
     */
    public function exchangeArray(array $DomainCategory)
    {
        $prev = $this->DomainCategory;
        $this->DomainCategory = $DomainCategory;
        return $prev;
    }

}
