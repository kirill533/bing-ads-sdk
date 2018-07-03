<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfLocationCriterion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var LocationCriterion[] $LocationCriterion
     */
    protected $LocationCriterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocationCriterion[]
     */
    public function getLocationCriterion()
    {
      return $this->LocationCriterion;
    }

    /**
     * @param LocationCriterion[] $LocationCriterion
     * @return \PMG\BingAds\AdInsight\ArrayOfLocationCriterion
     */
    public function setLocationCriterion(array $LocationCriterion = null)
    {
      $this->LocationCriterion = $LocationCriterion;
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
      return isset($this->LocationCriterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocationCriterion
     */
    public function offsetGet($offset)
    {
      return $this->LocationCriterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocationCriterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocationCriterion[] = $value;
      } else {
        $this->LocationCriterion[$offset] = $value;
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
      unset($this->LocationCriterion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return LocationCriterion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->LocationCriterion);
    }

    /**
     * Countable implementation
     *
     * @return LocationCriterion Return count of elements
     */
    public function count()
    {
      return count($this->LocationCriterion);
    }

    /**
     * Change the current array with another
     *
     * @return LocationCriterion[]|null The previous array if present
     */
    public function exchangeArray(array $LocationCriterion)
    {
        $prev = $this->LocationCriterion;
        $this->LocationCriterion = $LocationCriterion;
        return $prev;
    }

}
