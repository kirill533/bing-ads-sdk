<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdeaCategory implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordIdeaCategory[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordIdeaCategory);
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

    /**
     * Change the current array with another
     *
     * @return KeywordIdeaCategory[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordIdeaCategory)
    {
        $prev = $this->KeywordIdeaCategory;
        $this->KeywordIdeaCategory = $KeywordIdeaCategory;
        return $prev;
    }

}
