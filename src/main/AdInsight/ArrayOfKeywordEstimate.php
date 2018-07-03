<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimate implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordEstimate[] $KeywordEstimate
     */
    protected $KeywordEstimate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimate[]
     */
    public function getKeywordEstimate()
    {
      return $this->KeywordEstimate;
    }

    /**
     * @param KeywordEstimate[] $KeywordEstimate
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimate
     */
    public function setKeywordEstimate(array $KeywordEstimate = null)
    {
      $this->KeywordEstimate = $KeywordEstimate;
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
      return isset($this->KeywordEstimate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimate
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimate[] = $value;
      } else {
        $this->KeywordEstimate[$offset] = $value;
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
      unset($this->KeywordEstimate[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordEstimate[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordEstimate);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimate Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimate);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordEstimate[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordEstimate)
    {
        $prev = $this->KeywordEstimate;
        $this->KeywordEstimate = $KeywordEstimate;
        return $prev;
    }

}
