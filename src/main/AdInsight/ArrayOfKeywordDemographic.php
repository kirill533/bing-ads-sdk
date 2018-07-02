<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordDemographic implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordDemographic[] $KeywordDemographic
     */
    protected $KeywordDemographic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordDemographic[]
     */
    public function getKeywordDemographic()
    {
      return $this->KeywordDemographic;
    }

    /**
     * @param KeywordDemographic[] $KeywordDemographic
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordDemographic
     */
    public function setKeywordDemographic(array $KeywordDemographic = null)
    {
      $this->KeywordDemographic = $KeywordDemographic;
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
      return isset($this->KeywordDemographic[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordDemographic
     */
    public function offsetGet($offset)
    {
      return $this->KeywordDemographic[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordDemographic $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordDemographic[] = $value;
      } else {
        $this->KeywordDemographic[$offset] = $value;
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
      unset($this->KeywordDemographic[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordDemographic Return the current element
     */
    public function current()
    {
      return current($this->KeywordDemographic);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordDemographic);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordDemographic);
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
      reset($this->KeywordDemographic);
    }

    /**
     * Countable implementation
     *
     * @return KeywordDemographic Return count of elements
     */
    public function count()
    {
      return count($this->KeywordDemographic);
    }

}
