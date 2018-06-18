<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdeaCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordIdeaCategory[] $KeywordIdeaCategory
     */
    protected $KeywordIdeaCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdeaCategory[]
     */
    public function getKeywordIdeaCategory()
    {
      return $this->KeywordIdeaCategory;
    }

    /**
     * @param KeywordIdeaCategory[] $KeywordIdeaCategory
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdeaCategory
     */
    public function setKeywordIdeaCategory(array $KeywordIdeaCategory = null)
    {
      $this->KeywordIdeaCategory = $KeywordIdeaCategory;
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
      return isset($this->KeywordIdeaCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdeaCategory
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdeaCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdeaCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdeaCategory[] = $value;
      } else {
        $this->KeywordIdeaCategory[$offset] = $value;
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
      unset($this->KeywordIdeaCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordIdeaCategory Return the current element
     */
    public function current()
    {
      return current($this->KeywordIdeaCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordIdeaCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordIdeaCategory);
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
      reset($this->KeywordIdeaCategory);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdeaCategory Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdeaCategory);
    }

}
