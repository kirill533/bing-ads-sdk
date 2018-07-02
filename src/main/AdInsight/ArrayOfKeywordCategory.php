<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordCategory[] $KeywordCategory
     */
    protected $KeywordCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordCategory[]
     */
    public function getKeywordCategory()
    {
      return $this->KeywordCategory;
    }

    /**
     * @param KeywordCategory[] $KeywordCategory
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordCategory
     */
    public function setKeywordCategory(array $KeywordCategory = null)
    {
      $this->KeywordCategory = $KeywordCategory;
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
      return isset($this->KeywordCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordCategory
     */
    public function offsetGet($offset)
    {
      return $this->KeywordCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordCategory[] = $value;
      } else {
        $this->KeywordCategory[$offset] = $value;
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
      unset($this->KeywordCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordCategory Return the current element
     */
    public function current()
    {
      return current($this->KeywordCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordCategory);
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
      reset($this->KeywordCategory);
    }

    /**
     * Countable implementation
     *
     * @return KeywordCategory Return count of elements
     */
    public function count()
    {
      return count($this->KeywordCategory);
    }

}
