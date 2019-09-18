<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfMatchType implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return MatchType[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MatchType ?? []);
    }

    /**
     * Countable implementation
     *
     * @return MatchType Return count of elements
     */
    public function count()
    {
        return is_array($this->MatchType) ? count($this->MatchType) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return MatchType[]|null The previous array if present
     */
    public function exchangeArray(array $MatchType)
    {
        $prev = $this->MatchType;
        $this->MatchType = $MatchType;
        return $prev;
    }

}
