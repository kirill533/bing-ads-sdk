<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupEstimator implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupEstimator[] $AdGroupEstimator
     */
    protected $AdGroupEstimator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupEstimator[]
     */
    public function getAdGroupEstimator()
    {
      return $this->AdGroupEstimator;
    }

    /**
     * @param AdGroupEstimator[] $AdGroupEstimator
     * @return \PMG\BingAds\AdInsight\ArrayOfAdGroupEstimator
     */
    public function setAdGroupEstimator(array $AdGroupEstimator = null)
    {
      $this->AdGroupEstimator = $AdGroupEstimator;
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
      return isset($this->AdGroupEstimator[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupEstimator
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupEstimator[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupEstimator $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupEstimator[] = $value;
      } else {
        $this->AdGroupEstimator[$offset] = $value;
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
      unset($this->AdGroupEstimator[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupEstimator Return the current element
     */
    public function current()
    {
      return current($this->AdGroupEstimator);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupEstimator);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupEstimator);
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
      reset($this->AdGroupEstimator);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupEstimator Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupEstimator);
    }

}
