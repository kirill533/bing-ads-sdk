<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordAndMatchType implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordAndMatchType[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordAndMatchType);
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

    /**
     * Change the current array with another
     *
     * @return KeywordAndMatchType[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordAndMatchType)
    {
        $prev = $this->KeywordAndMatchType;
        $this->KeywordAndMatchType = $KeywordAndMatchType;
        return $prev;
    }

}
