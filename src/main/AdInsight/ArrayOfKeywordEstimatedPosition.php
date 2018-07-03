<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordEstimatedPosition implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordEstimatedPosition[] $KeywordEstimatedPosition
     */
    protected $KeywordEstimatedPosition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordEstimatedPosition[]
     */
    public function getKeywordEstimatedPosition()
    {
      return $this->KeywordEstimatedPosition;
    }

    /**
     * @param KeywordEstimatedPosition[] $KeywordEstimatedPosition
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordEstimatedPosition
     */
    public function setKeywordEstimatedPosition(array $KeywordEstimatedPosition = null)
    {
      $this->KeywordEstimatedPosition = $KeywordEstimatedPosition;
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
      return isset($this->KeywordEstimatedPosition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordEstimatedPosition
     */
    public function offsetGet($offset)
    {
      return $this->KeywordEstimatedPosition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordEstimatedPosition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordEstimatedPosition[] = $value;
      } else {
        $this->KeywordEstimatedPosition[$offset] = $value;
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
      unset($this->KeywordEstimatedPosition[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordEstimatedPosition[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordEstimatedPosition);
    }

    /**
     * Countable implementation
     *
     * @return KeywordEstimatedPosition Return count of elements
     */
    public function count()
    {
      return count($this->KeywordEstimatedPosition);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordEstimatedPosition[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordEstimatedPosition)
    {
        $prev = $this->KeywordEstimatedPosition;
        $this->KeywordEstimatedPosition = $KeywordEstimatedPosition;
        return $prev;
    }

}
