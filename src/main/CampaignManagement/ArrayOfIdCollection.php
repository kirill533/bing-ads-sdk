<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfIdCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var IdCollection[] $IdCollection
     */
    protected $IdCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IdCollection[]
     */
    public function getIdCollection()
    {
        return $this->IdCollection;
    }

    /**
     * @param IdCollection[] $IdCollection
     * @return \PMG\BingAds\CampaignManagement\ArrayOfIdCollection
     */
    public function setIdCollection(array $IdCollection = null)
    {
        $this->IdCollection = $IdCollection;
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
      return isset($this->IdCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return IdCollection
     */
    public function offsetGet($offset)
    {
      return $this->IdCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param IdCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->IdCollection[] = $value;
      } else {
        $this->IdCollection[$offset] = $value;
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
      unset($this->IdCollection[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return IdCollection[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->IdCollection);
    }

    /**
     * Countable implementation
     *
     * @return IdCollection Return count of elements
     */
    public function count()
    {
      return count($this->IdCollection);
    }

    /**
     * Change the current array with another
     *
     * @return IdCollection[]|null The previous array if present
     */
    public function exchangeArray(array $IdCollection)
    {
        $prev = $this->IdCollection;
        $this->IdCollection = $IdCollection;
        return $prev;
    }

}
