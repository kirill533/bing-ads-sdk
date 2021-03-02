<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfKeyValuePairOflonglong implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeyValuePairOflonglong[] $KeyValuePairOflonglong
     */
    protected $KeyValuePairOflonglong = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValuePairOflonglong[]
     */
    public function getKeyValuePairOflonglong()
    {
        return $this->KeyValuePairOflonglong;
    }

    /**
     * @param KeyValuePairOflonglong[] $KeyValuePairOflonglong
     * @return \PMG\BingAds\CampaignManagement\ArrayOfKeyValuePairOflonglong
     */
    public function setKeyValuePairOflonglong(array $KeyValuePairOflonglong = null)
    {
        $this->KeyValuePairOflonglong = $KeyValuePairOflonglong;
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
      return isset($this->KeyValuePairOflonglong[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValuePairOflonglong
     */
    public function offsetGet($offset)
    {
      return $this->KeyValuePairOflonglong[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValuePairOflonglong $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValuePairOflonglong[] = $value;
      } else {
        $this->KeyValuePairOflonglong[$offset] = $value;
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
      unset($this->KeyValuePairOflonglong[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeyValuePairOflonglong[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeyValuePairOflonglong ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeyValuePairOflonglong Return count of elements
     */
    public function count()
    {
        return is_array($this->KeyValuePairOflonglong) ? count($this->KeyValuePairOflonglong) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeyValuePairOflonglong[]|null The previous array if present
     */
    public function exchangeArray(array $KeyValuePairOflonglong)
    {
        $prev = $this->KeyValuePairOflonglong;
        $this->KeyValuePairOflonglong = $KeyValuePairOflonglong;
        return $prev;
    }

}
