<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfMatchType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MatchType[] $MatchType
     */
    protected $MatchType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MatchType[]
     */
    public function getMatchType()
    {
      return $this->MatchType;
    }

    /**
     * @param MatchType[] $MatchType
     * @return \PMG\BingAds\AdInsight\ArrayOfMatchType
     */
    public function setMatchType(array $MatchType = null)
    {
      $this->MatchType = $MatchType;
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
      return isset($this->MatchType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MatchType
     */
    public function offsetGet($offset)
    {
      return $this->MatchType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MatchType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MatchType[] = $value;
      } else {
        $this->MatchType[$offset] = $value;
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
      unset($this->MatchType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MatchType Return the current element
     */
    public function current()
    {
      return current($this->MatchType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MatchType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MatchType);
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
      reset($this->MatchType);
    }

    /**
     * Countable implementation
     *
     * @return MatchType Return count of elements
     */
    public function count()
    {
      return count($this->MatchType);
    }

}
