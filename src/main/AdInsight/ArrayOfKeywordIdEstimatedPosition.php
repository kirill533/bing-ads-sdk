<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdEstimatedPosition implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordIdEstimatedPosition[] $KeywordIdEstimatedPosition
     */
    protected $KeywordIdEstimatedPosition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdEstimatedPosition[]
     */
    public function getKeywordIdEstimatedPosition()
    {
        return $this->KeywordIdEstimatedPosition;
    }

    /**
     * @param KeywordIdEstimatedPosition[] $KeywordIdEstimatedPosition
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdEstimatedPosition
     */
    public function setKeywordIdEstimatedPosition(array $KeywordIdEstimatedPosition = null)
    {
        $this->KeywordIdEstimatedPosition = $KeywordIdEstimatedPosition;
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
      return isset($this->KeywordIdEstimatedPosition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdEstimatedPosition
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdEstimatedPosition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdEstimatedPosition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdEstimatedPosition[] = $value;
      } else {
        $this->KeywordIdEstimatedPosition[$offset] = $value;
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
      unset($this->KeywordIdEstimatedPosition[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordIdEstimatedPosition[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordIdEstimatedPosition);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdEstimatedPosition Return count of elements
     */
    public function count()
    {
      return count($this->KeywordIdEstimatedPosition);
    }

    /**
     * Change the current array with another
     *
     * @return KeywordIdEstimatedPosition[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordIdEstimatedPosition)
    {
        $prev = $this->KeywordIdEstimatedPosition;
        $this->KeywordIdEstimatedPosition = $KeywordIdEstimatedPosition;
        return $prev;
    }

}
