<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordCategoryResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordCategoryResult[] $KeywordCategoryResult
     */
    protected $KeywordCategoryResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordCategoryResult[]
     */
    public function getKeywordCategoryResult()
    {
      return $this->KeywordCategoryResult;
    }

    /**
     * @param KeywordCategoryResult[] $KeywordCategoryResult
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordCategoryResult
     */
    public function setKeywordCategoryResult(array $KeywordCategoryResult = null)
    {
      $this->KeywordCategoryResult = $KeywordCategoryResult;
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
      return isset($this->KeywordCategoryResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordCategoryResult
     */
    public function offsetGet($offset)
    {
      return $this->KeywordCategoryResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordCategoryResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordCategoryResult[] = $value;
      } else {
        $this->KeywordCategoryResult[$offset] = $value;
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
      unset($this->KeywordCategoryResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordCategoryResult Return the current element
     */
    public function current()
    {
      return current($this->KeywordCategoryResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordCategoryResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordCategoryResult);
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
      reset($this->KeywordCategoryResult);
    }

    /**
     * Countable implementation
     *
     * @return KeywordCategoryResult Return count of elements
     */
    public function count()
    {
      return count($this->KeywordCategoryResult);
    }

}
