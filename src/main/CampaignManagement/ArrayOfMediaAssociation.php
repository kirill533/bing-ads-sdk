<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMediaAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var MediaAssociation[] $MediaAssociation
     */
    protected $MediaAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaAssociation[]
     */
    public function getMediaAssociation()
    {
        return $this->MediaAssociation;
    }

    /**
     * @param MediaAssociation[] $MediaAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfMediaAssociation
     */
    public function setMediaAssociation(array $MediaAssociation = null)
    {
        $this->MediaAssociation = $MediaAssociation;
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
      return isset($this->MediaAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaAssociation
     */
    public function offsetGet($offset)
    {
      return $this->MediaAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaAssociation[] = $value;
      } else {
        $this->MediaAssociation[$offset] = $value;
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
      unset($this->MediaAssociation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return MediaAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MediaAssociation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return MediaAssociation Return count of elements
     */
    public function count()
    {
        return is_array($this->MediaAssociation) ? count($this->MediaAssociation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return MediaAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $MediaAssociation)
    {
        $prev = $this->MediaAssociation;
        $this->MediaAssociation = $MediaAssociation;
        return $prev;
    }

}
