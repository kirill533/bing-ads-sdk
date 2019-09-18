<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMediaRepresentation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var MediaRepresentation[] $MediaRepresentation
     */
    protected $MediaRepresentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaRepresentation[]
     */
    public function getMediaRepresentation()
    {
        return $this->MediaRepresentation;
    }

    /**
     * @param MediaRepresentation[] $MediaRepresentation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfMediaRepresentation
     */
    public function setMediaRepresentation(array $MediaRepresentation = null)
    {
        $this->MediaRepresentation = $MediaRepresentation;
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
      return isset($this->MediaRepresentation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaRepresentation
     */
    public function offsetGet($offset)
    {
      return $this->MediaRepresentation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaRepresentation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaRepresentation[] = $value;
      } else {
        $this->MediaRepresentation[$offset] = $value;
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
      unset($this->MediaRepresentation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return MediaRepresentation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MediaRepresentation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return MediaRepresentation Return count of elements
     */
    public function count()
    {
        return is_array($this->MediaRepresentation) ? count($this->MediaRepresentation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return MediaRepresentation[]|null The previous array if present
     */
    public function exchangeArray(array $MediaRepresentation)
    {
        $prev = $this->MediaRepresentation;
        $this->MediaRepresentation = $MediaRepresentation;
        return $prev;
    }

}
