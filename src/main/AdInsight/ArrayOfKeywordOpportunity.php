<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordOpportunity implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordOpportunity[] $KeywordOpportunity
     */
    protected $KeywordOpportunity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordOpportunity[]
     */
    public function getKeywordOpportunity()
    {
        return $this->KeywordOpportunity;
    }

    /**
     * @param KeywordOpportunity[] $KeywordOpportunity
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordOpportunity
     */
    public function setKeywordOpportunity(array $KeywordOpportunity = null)
    {
        $this->KeywordOpportunity = $KeywordOpportunity;
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
      return isset($this->KeywordOpportunity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordOpportunity
     */
    public function offsetGet($offset)
    {
      return $this->KeywordOpportunity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordOpportunity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordOpportunity[] = $value;
      } else {
        $this->KeywordOpportunity[$offset] = $value;
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
      unset($this->KeywordOpportunity[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordOpportunity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordOpportunity);
    }

    /**
     * Countable implementation
     *
     * @return KeywordOpportunity Return count of elements
     */
    public function count()
    {
      return count($this->KeywordOpportunity);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordOpportunity[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordOpportunity)
    {
        $prev = $this->KeywordOpportunity;
        $this->KeywordOpportunity = $KeywordOpportunity;
        return $prev;
    }

}
