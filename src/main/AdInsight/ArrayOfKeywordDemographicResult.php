<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordDemographicResult implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordDemographicResult[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordDemographicResult);
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

    /**
     * Change the current array with another
     *
     * @return KeywordDemographicResult[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordDemographicResult)
    {
        $prev = $this->KeywordDemographicResult;
        $this->KeywordDemographicResult = $KeywordDemographicResult;
        return $prev;
    }

}
