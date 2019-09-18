<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfCriterion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Criterion[] $Criterion
     */
    protected $Criterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Criterion[]
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }

    /**
     * @param Criterion[] $Criterion
     * @return \PMG\BingAds\AdInsight\ArrayOfCriterion
     */
    public function setCriterion(array $Criterion = null)
    {
        $this->Criterion = $Criterion;
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
      return isset($this->Criterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Criterion
     */
    public function offsetGet($offset)
    {
      return $this->Criterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Criterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Criterion[] = $value;
      } else {
        $this->Criterion[$offset] = $value;
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
      unset($this->Criterion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Criterion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Criterion ?? []);
    }

    /**
     * Countable implementation
     *
     * @return Criterion Return count of elements
     */
    public function count()
    {
        return is_array($this->Criterion) ? count($this->Criterion) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return Criterion[]|null The previous array if present
     */
    public function exchangeArray(array $Criterion)
    {
        $prev = $this->Criterion;
        $this->Criterion = $Criterion;
        return $prev;
    }

}
