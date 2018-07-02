<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupEstimate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupEstimate[] $AdGroupEstimate
     */
    protected $AdGroupEstimate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupEstimate[]
     */
    public function getAdGroupEstimate()
    {
      return $this->AdGroupEstimate;
    }

    /**
     * @param AdGroupEstimate[] $AdGroupEstimate
     * @return \PMG\BingAds\AdInsight\ArrayOfAdGroupEstimate
     */
    public function setAdGroupEstimate(array $AdGroupEstimate = null)
    {
      $this->AdGroupEstimate = $AdGroupEstimate;
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
      return isset($this->AdGroupEstimate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupEstimate
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupEstimate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupEstimate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupEstimate[] = $value;
      } else {
        $this->AdGroupEstimate[$offset] = $value;
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
      unset($this->AdGroupEstimate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupEstimate Return the current element
     */
    public function current()
    {
      return current($this->AdGroupEstimate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupEstimate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupEstimate);
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
      reset($this->AdGroupEstimate);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupEstimate Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupEstimate);
    }

}
