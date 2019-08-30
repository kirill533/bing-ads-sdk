<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfSearchCountsByAttributes implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var SearchCountsByAttributes[] $SearchCountsByAttributes
     */
    protected $SearchCountsByAttributes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchCountsByAttributes[]
     */
    public function getSearchCountsByAttributes()
    {
        return $this->SearchCountsByAttributes;
    }

    /**
     * @param SearchCountsByAttributes[] $SearchCountsByAttributes
     * @return \PMG\BingAds\AdInsight\ArrayOfSearchCountsByAttributes
     */
    public function setSearchCountsByAttributes(array $SearchCountsByAttributes = null)
    {
        $this->SearchCountsByAttributes = $SearchCountsByAttributes;
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
      return isset($this->SearchCountsByAttributes[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SearchCountsByAttributes
     */
    public function offsetGet($offset)
    {
      return $this->SearchCountsByAttributes[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SearchCountsByAttributes $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SearchCountsByAttributes[] = $value;
      } else {
        $this->SearchCountsByAttributes[$offset] = $value;
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
      unset($this->SearchCountsByAttributes[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return SearchCountsByAttributes[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SearchCountsByAttributes);
    }

    /**
     * Countable implementation
     *
     * @return SearchCountsByAttributes Return count of elements
     */
    public function count()
    {
      return count($this->SearchCountsByAttributes);
    }

    /**
     * Change the current array with another
     *
     * @return SearchCountsByAttributes[]|null The previous array if present
     */
    public function exchangeArray(array $SearchCountsByAttributes)
    {
        $prev = $this->SearchCountsByAttributes;
        $this->SearchCountsByAttributes = $SearchCountsByAttributes;
        return $prev;
    }

}
