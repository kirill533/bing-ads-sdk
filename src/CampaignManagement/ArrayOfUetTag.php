<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfUetTag implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UetTag[] $UetTag
     */
    protected $UetTag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UetTag[]
     */
    public function getUetTag()
    {
      return $this->UetTag;
    }

    /**
     * @param UetTag[] $UetTag
     * @return \PMG\BingAds\CampaignManagement\ArrayOfUetTag
     */
    public function setUetTag(array $UetTag = null)
    {
      $this->UetTag = $UetTag;
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
      return isset($this->UetTag[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UetTag
     */
    public function offsetGet($offset)
    {
      return $this->UetTag[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UetTag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UetTag[] = $value;
      } else {
        $this->UetTag[$offset] = $value;
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
      unset($this->UetTag[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UetTag Return the current element
     */
    public function current()
    {
      return current($this->UetTag);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UetTag);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UetTag);
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
      reset($this->UetTag);
    }

    /**
     * Countable implementation
     *
     * @return UetTag Return count of elements
     */
    public function count()
    {
      return count($this->UetTag);
    }

}
