<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordAndConfidence implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordAndConfidence[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordAndConfidence);
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

    /**
     * Change the current array with another
     *
     * @return KeywordAndConfidence[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordAndConfidence)
    {
        $prev = $this->KeywordAndConfidence;
        $this->KeywordAndConfidence = $KeywordAndConfidence;
        return $prev;
    }

}
