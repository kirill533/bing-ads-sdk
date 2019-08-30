<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimator implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordEstimator[] $KeywordEstimator
     */
    protected $KeywordEstimator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimator[]
     */
    public function getKeywordEstimator()
    {
        return $this->KeywordEstimator;
    }

    /**
     * @param KeywordEstimator[] $KeywordEstimator
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimator
     */
    public function setKeywordEstimator(array $KeywordEstimator = null)
    {
        $this->KeywordEstimator = $KeywordEstimator;
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
      return isset($this->KeywordEstimator[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimator
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimator[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimator $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimator[] = $value;
      } else {
        $this->KeywordEstimator[$offset] = $value;
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
      unset($this->KeywordEstimator[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordEstimator[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordEstimator);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimator Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimator);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordEstimator[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordEstimator)
    {
        $prev = $this->KeywordEstimator;
        $this->KeywordEstimator = $KeywordEstimator;
        return $prev;
    }

}
