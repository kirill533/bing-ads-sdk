<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMedia implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return Media[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Media);
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

    /**
     * Change the current array with another
     *
     * @return Media[]|null The previous array if present
     */
    public function exchangeArray(array $Media)
    {
        $prev = $this->Media;
        $this->Media = $Media;
        return $prev;
    }

}
