<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordCategory implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordCategory[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordCategory);
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

    /**
     * Change the current array with another
     *
     * @return KeywordCategory[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordCategory)
    {
        $prev = $this->KeywordCategory;
        $this->KeywordCategory = $KeywordCategory;
        return $prev;
    }

}
