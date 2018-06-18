<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordAndMatchType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordAndMatchType[] $KeywordAndMatchType
     */
    protected $KeywordAndMatchType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordAndMatchType[]
     */
    public function getKeywordAndMatchType()
    {
      return $this->KeywordAndMatchType;
    }

    /**
     * @param KeywordAndMatchType[] $KeywordAndMatchType
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordAndMatchType
     */
    public function setKeywordAndMatchType(array $KeywordAndMatchType = null)
    {
      $this->KeywordAndMatchType = $KeywordAndMatchType;
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
      return isset($this->KeywordAndMatchType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordAndMatchType
     */
    public function offsetGet($offset)
    {
      return $this->KeywordAndMatchType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordAndMatchType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordAndMatchType[] = $value;
      } else {
        $this->KeywordAndMatchType[$offset] = $value;
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
      unset($this->KeywordAndMatchType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordAndMatchType Return the current element
     */
    public function current()
    {
      return current($this->KeywordAndMatchType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordAndMatchType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordAndMatchType);
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
      reset($this->KeywordAndMatchType);
    }

    /**
     * Countable implementation
     *
     * @return KeywordAndMatchType Return count of elements
     */
    public function count()
    {
      return count($this->KeywordAndMatchType);
    }

}
