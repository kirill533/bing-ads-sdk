<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBMCStore implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BMCStore[] $BMCStore
     */
    protected $BMCStore = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BMCStore[]
     */
    public function getBMCStore()
    {
      return $this->BMCStore;
    }

    /**
     * @param BMCStore[] $BMCStore
     * @return \PMG\BingAds\CampaignManagement\ArrayOfBMCStore
     */
    public function setBMCStore(array $BMCStore = null)
    {
      $this->BMCStore = $BMCStore;
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
      return isset($this->BMCStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BMCStore
     */
    public function offsetGet($offset)
    {
      return $this->BMCStore[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BMCStore $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BMCStore[] = $value;
      } else {
        $this->BMCStore[$offset] = $value;
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
      unset($this->BMCStore[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BMCStore Return the current element
     */
    public function current()
    {
      return current($this->BMCStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BMCStore);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BMCStore);
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
      reset($this->BMCStore);
    }

    /**
     * Countable implementation
     *
     * @return BMCStore Return count of elements
     */
    public function count()
    {
      return count($this->BMCStore);
    }

}
