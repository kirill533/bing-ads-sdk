<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordDemographicResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeywordDemographicResult[] $KeywordDemographicResult
     */
    protected $KeywordDemographicResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeywordDemographicResult[]
     */
    public function getKeywordDemographicResult()
    {
      return $this->KeywordDemographicResult;
    }

    /**
     * @param KeywordDemographicResult[] $KeywordDemographicResult
     * @return \PMG\BingAds\AdInsight\ArrayOfKeywordDemographicResult
     */
    public function setKeywordDemographicResult(array $KeywordDemographicResult = null)
    {
      $this->KeywordDemographicResult = $KeywordDemographicResult;
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
      return isset($this->KeywordDemographicResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeywordDemographicResult
     */
    public function offsetGet($offset)
    {
      return $this->KeywordDemographicResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeywordDemographicResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeywordDemographicResult[] = $value;
      } else {
        $this->KeywordDemographicResult[$offset] = $value;
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
      unset($this->KeywordDemographicResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeywordDemographicResult Return the current element
     */
    public function current()
    {
      return current($this->KeywordDemographicResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeywordDemographicResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeywordDemographicResult);
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
      reset($this->KeywordDemographicResult);
    }

    /**
     * Countable implementation
     *
     * @return KeywordDemographicResult Return count of elements
     */
    public function count()
    {
      return count($this->KeywordDemographicResult);
    }

}
