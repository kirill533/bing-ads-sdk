<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordAndConfidence implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordAndConfidence[] $KeywordAndConfidence
     */
    protected $KeywordAndConfidence = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordAndConfidence[]
     */
    public function getKeywordAndConfidence()
    {
      return $this->KeywordAndConfidence;
    }

    /**
     * @param KeywordAndConfidence[] $KeywordAndConfidence
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordAndConfidence
     */
    public function setKeywordAndConfidence(array $KeywordAndConfidence = null)
    {
      $this->KeywordAndConfidence = $KeywordAndConfidence;
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
      return isset($this->KeywordAndConfidence[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordAndConfidence
     */
    public function offsetGet($offset)
    {
      return $this->KeywordAndConfidence[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordAndConfidence $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordAndConfidence[] = $value;
      } else {
        $this->KeywordAndConfidence[$offset] = $value;
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
      unset($this->KeywordAndConfidence[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordAndConfidence Return the current element
     */
    public function current()
    {
      return current($this->KeywordAndConfidence);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordAndConfidence);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordAndConfidence);
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
      reset($this->KeywordAndConfidence);
    }

    /**
     * Countable implementation
     *
     * @return KeywordAndConfidence Return count of elements
     */
    public function count()
    {
      return count($this->KeywordAndConfidence);
    }

}
