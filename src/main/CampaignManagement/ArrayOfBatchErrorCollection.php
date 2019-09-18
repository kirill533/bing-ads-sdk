<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBatchErrorCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var BatchErrorCollection[] $BatchErrorCollection
     */
    protected $BatchErrorCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BatchErrorCollection[]
     */
    public function getBatchErrorCollection()
    {
        return $this->BatchErrorCollection;
    }

    /**
     * @param BatchErrorCollection[] $BatchErrorCollection
     * @return \PMG\BingAds\CampaignManagement\ArrayOfBatchErrorCollection
     */
    public function setBatchErrorCollection(array $BatchErrorCollection = null)
    {
        $this->BatchErrorCollection = $BatchErrorCollection;
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
      return isset($this->BatchErrorCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BatchErrorCollection
     */
    public function offsetGet($offset)
    {
      return $this->BatchErrorCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BatchErrorCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BatchErrorCollection[] = $value;
      } else {
        $this->BatchErrorCollection[$offset] = $value;
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
      unset($this->BatchErrorCollection[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return BatchErrorCollection[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BatchErrorCollection ?? []);
    }

    /**
     * Countable implementation
     *
     * @return BatchErrorCollection Return count of elements
     */
    public function count()
    {
        return is_array($this->BatchErrorCollection) ? count($this->BatchErrorCollection) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return BatchErrorCollection[]|null The previous array if present
     */
    public function exchangeArray(array $BatchErrorCollection)
    {
        $prev = $this->BatchErrorCollection;
        $this->BatchErrorCollection = $BatchErrorCollection;
        return $prev;
    }

}
