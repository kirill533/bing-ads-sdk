<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdeaAttribute implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordIdeaAttribute[] $KeywordIdeaAttribute
     */
    protected $KeywordIdeaAttribute = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdeaAttribute[]
     */
    public function getKeywordIdeaAttribute()
    {
      return $this->KeywordIdeaAttribute;
    }

    /**
     * @param KeywordIdeaAttribute[] $KeywordIdeaAttribute
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdeaAttribute
     */
    public function setKeywordIdeaAttribute(array $KeywordIdeaAttribute = null)
    {
      $this->KeywordIdeaAttribute = $KeywordIdeaAttribute;
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
      return isset($this->KeywordIdeaAttribute[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdeaAttribute
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdeaAttribute[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdeaAttribute $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdeaAttribute[] = $value;
      } else {
        $this->KeywordIdeaAttribute[$offset] = $value;
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
      unset($this->KeywordIdeaAttribute[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordIdeaAttribute Return the current element
     */
    public function current()
    {
      return current($this->KeywordIdeaAttribute);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordIdeaAttribute);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordIdeaAttribute);
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
      reset($this->KeywordIdeaAttribute);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdeaAttribute Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdeaAttribute);
    }

}
