<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordBidLandscape implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return KeywordBidLandscape Return the current element
     */
    public function current()
    {
      return current($this->KeywordBidLandscape);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordBidLandscape);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordBidLandscape);
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
      reset($this->KeywordBidLandscape);
    }

    /**
     * Countable implementation
     *
     * @return KeywordBidLandscape Return count of elements
     */
    public function count()
    {
      return count($this->KeywordBidLandscape);
    }

}
