<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordKPI implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordKPI[] $KeywordKPI
     */
    protected $KeywordKPI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordKPI[]
     */
    public function getKeywordKPI()
    {
        return $this->KeywordKPI;
    }

    /**
     * @param KeywordKPI[] $KeywordKPI
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordKPI
     */
    public function setKeywordKPI(array $KeywordKPI = null)
    {
        $this->KeywordKPI = $KeywordKPI;
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
      return isset($this->KeywordKPI[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordKPI
     */
    public function offsetGet($offset)
    {
      return $this->KeywordKPI[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordKPI $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordKPI[] = $value;
      } else {
        $this->KeywordKPI[$offset] = $value;
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
      unset($this->KeywordKPI[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordKPI[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordKPI ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordKPI Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordKPI) ? count($this->KeywordKPI) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordKPI[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordKPI)
    {
        $prev = $this->KeywordKPI;
        $this->KeywordKPI = $KeywordKPI;
        return $prev;
    }

}
