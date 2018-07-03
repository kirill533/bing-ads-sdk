<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupEstimate implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdGroupEstimate[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupEstimate);
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

    /**
     * Change the current array with another
     *
     * @return AdGroupEstimate[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupEstimate)
    {
        $prev = $this->AdGroupEstimate;
        $this->AdGroupEstimate = $AdGroupEstimate;
        return $prev;
    }

}
