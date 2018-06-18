<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordSuggestion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordSuggestion[] $KeywordSuggestion
     */
    protected $KeywordSuggestion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordSuggestion[]
     */
    public function getKeywordSuggestion()
    {
      return $this->KeywordSuggestion;
    }

    /**
     * @param KeywordSuggestion[] $KeywordSuggestion
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordSuggestion
     */
    public function setKeywordSuggestion(array $KeywordSuggestion = null)
    {
      $this->KeywordSuggestion = $KeywordSuggestion;
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
      return isset($this->KeywordSuggestion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordSuggestion
     */
    public function offsetGet($offset)
    {
      return $this->KeywordSuggestion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordSuggestion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordSuggestion[] = $value;
      } else {
        $this->KeywordSuggestion[$offset] = $value;
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
      unset($this->KeywordSuggestion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordSuggestion Return the current element
     */
    public function current()
    {
      return current($this->KeywordSuggestion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordSuggestion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordSuggestion);
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
      reset($this->KeywordSuggestion);
    }

    /**
     * Countable implementation
     *
     * @return KeywordSuggestion Return count of elements
     */
    public function count()
    {
      return count($this->KeywordSuggestion);
    }

}
