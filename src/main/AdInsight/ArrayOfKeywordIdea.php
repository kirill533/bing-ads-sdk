<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordIdea implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeywordIdea[] $KeywordIdea
     */
    protected $KeywordIdea = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordIdea[]
     */
    public function getKeywordIdea()
    {
        return $this->KeywordIdea;
    }

    /**
     * @param KeywordIdea[] $KeywordIdea
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordIdea
     */
    public function setKeywordIdea(array $KeywordIdea = null)
    {
        $this->KeywordIdea = $KeywordIdea;
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
      return isset($this->KeywordIdea[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordIdea
     */
    public function offsetGet($offset)
    {
      return $this->KeywordIdea[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordIdea $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordIdea[] = $value;
      } else {
        $this->KeywordIdea[$offset] = $value;
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
      unset($this->KeywordIdea[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeywordIdea[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordIdea ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeywordIdea Return count of elements
     */
    public function count()
    {
        return is_array($this->KeywordIdea) ? count($this->KeywordIdea) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeywordIdea[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordIdea)
    {
        $prev = $this->KeywordIdea;
        $this->KeywordIdea = $KeywordIdea;
        return $prev;
    }

}
