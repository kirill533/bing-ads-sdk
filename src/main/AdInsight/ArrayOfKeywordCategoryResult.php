<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordCategoryResult implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordCategoryResult[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordCategoryResult ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordCategoryResult Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordCategoryResult) ? count($this->KeywordCategoryResult) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordCategoryResult[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordCategoryResult)
    {
        $prev = $this->KeywordCategoryResult;
        $this->KeywordCategoryResult = $KeywordCategoryResult;
        return $prev;
    }

}
