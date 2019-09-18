<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupEstimator implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdGroupEstimator[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupEstimator ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupEstimator Return count of elements
     */
    public function count()
    {
        return is_array($this->AdGroupEstimator) ? count($this->AdGroupEstimator) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdGroupEstimator[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupEstimator)
    {
        $prev = $this->AdGroupEstimator;
        $this->AdGroupEstimator = $AdGroupEstimator;
        return $prev;
    }

}
