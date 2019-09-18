<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordBidLandscape implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordBidLandscape[] $KeywordBidLandscape
     */
    protected $KeywordBidLandscape = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordBidLandscape[]
     */
    public function getKeywordBidLandscape()
    {
        return $this->KeywordBidLandscape;
    }

    /**
     * @param KeywordBidLandscape[] $KeywordBidLandscape
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordBidLandscape
     */
    public function setKeywordBidLandscape(array $KeywordBidLandscape = null)
    {
        $this->KeywordBidLandscape = $KeywordBidLandscape;
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
      return isset($this->KeywordBidLandscape[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordBidLandscape
     */
    public function offsetGet($offset)
    {
      return $this->KeywordBidLandscape[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordBidLandscape $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordBidLandscape[] = $value;
      } else {
        $this->KeywordBidLandscape[$offset] = $value;
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
      unset($this->KeywordBidLandscape[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordBidLandscape[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordBidLandscape ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordBidLandscape Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordBidLandscape) ? count($this->KeywordBidLandscape) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordBidLandscape[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordBidLandscape)
    {
        $prev = $this->KeywordBidLandscape;
        $this->KeywordBidLandscape = $KeywordBidLandscape;
        return $prev;
    }

}
