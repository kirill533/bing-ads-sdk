<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMedia implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Media[] $Media
     */
    protected $Media = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Media[]
     */
    public function getMedia()
    {
      return $this->Media;
    }

    /**
     * @param Media[] $Media
     * @return \PMG\BingAds\CampaignManagement\ArrayOfMedia
     */
    public function setMedia(array $Media = null)
    {
      $this->Media = $Media;
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
      return isset($this->Media[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Media
     */
    public function offsetGet($offset)
    {
      return $this->Media[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Media $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Media[] = $value;
      } else {
        $this->Media[$offset] = $value;
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
      unset($this->Media[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Media Return the current element
     */
    public function current()
    {
      return current($this->Media);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Media);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Media);
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
      reset($this->Media);
    }

    /**
     * Countable implementation
     *
     * @return Media Return count of elements
     */
    public function count()
    {
      return count($this->Media);
    }

}
