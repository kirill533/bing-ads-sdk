<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdeaAttribute implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordIdeaAttribute[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordIdeaAttribute ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdeaAttribute Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordIdeaAttribute) ? count($this->KeywordIdeaAttribute) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordIdeaAttribute[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordIdeaAttribute)
    {
        $prev = $this->KeywordIdeaAttribute;
        $this->KeywordIdeaAttribute = $KeywordIdeaAttribute;
        return $prev;
    }

}
