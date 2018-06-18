<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordOpportunity implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return KeywordOpportunity Return the current element
     */
    public function current()
    {
      return current($this->KeywordOpportunity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordOpportunity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordOpportunity);
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
      reset($this->KeywordOpportunity);
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

}
