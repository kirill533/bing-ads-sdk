<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfKeywordDemographic implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeywordDemographic[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeywordDemographic);
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

    /**
     * Change the current array with another
     *
     * @return KeywordDemographic[]|null The previous array if present
     */
    public function exchangeArray(array $KeywordDemographic)
    {
        $prev = $this->KeywordDemographic;
        $this->KeywordDemographic = $KeywordDemographic;
        return $prev;
    }

}
