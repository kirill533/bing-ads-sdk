<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdea implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordIdea[] $KeywordIdea
     */
    protected $KeywordIdea = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdea[]
     */
    public function getKeywordIdea()
    {
      return $this->KeywordIdea;
    }

    /**
     * @param KeywordIdea[] $KeywordIdea
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdea
     */
    public function setKeywordIdea(array $KeywordIdea = null)
    {
      $this->KeywordIdea = $KeywordIdea;
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
      return isset($this->KeywordIdea[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdea
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdea[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdea $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdea[] = $value;
      } else {
        $this->KeywordIdea[$offset] = $value;
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
      unset($this->KeywordIdea[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordIdea Return the current element
     */
    public function current()
    {
      return current($this->KeywordIdea);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordIdea);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordIdea);
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
      reset($this->KeywordIdea);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdea Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdea);
    }

}
