<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfBMCStore implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return BMCStore[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->BMCStore);
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

    /**
     * Change the current array with another
     *
     * @return BMCStore[]|null The previous array if present
     */
    public function exchangeArray(array $BMCStore)
    {
        $prev = $this->BMCStore;
        $this->BMCStore = $BMCStore;
        return $prev;
    }

}
