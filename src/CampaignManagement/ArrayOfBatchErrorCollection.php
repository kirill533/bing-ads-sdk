<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBatchErrorCollection implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return BatchErrorCollection Return the current element
     */
    public function current()
    {
      return current($this->BatchErrorCollection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BatchErrorCollection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BatchErrorCollection);
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
      reset($this->BatchErrorCollection);
    }

    /**
     * Countable implementation
     *
     * @return BatchErrorCollection Return count of elements
     */
    public function count()
    {
      return count($this->BatchErrorCollection);
    }

}
