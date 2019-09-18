<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSharedEntityAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var SharedEntityAssociation[] $SharedEntityAssociation
     */
    protected $SharedEntityAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedEntityAssociation[]
     */
    public function getSharedEntityAssociation()
    {
        return $this->SharedEntityAssociation;
    }

    /**
     * @param SharedEntityAssociation[] $SharedEntityAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfSharedEntityAssociation
     */
    public function setSharedEntityAssociation(array $SharedEntityAssociation = null)
    {
        $this->SharedEntityAssociation = $SharedEntityAssociation;
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
      return isset($this->SharedEntityAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SharedEntityAssociation
     */
    public function offsetGet($offset)
    {
      return $this->SharedEntityAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SharedEntityAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SharedEntityAssociation[] = $value;
      } else {
        $this->SharedEntityAssociation[$offset] = $value;
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
      unset($this->SharedEntityAssociation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return SharedEntityAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SharedEntityAssociation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return SharedEntityAssociation Return count of elements
     */
    public function count()
    {
        return is_array($this->SharedEntityAssociation) ? count($this->SharedEntityAssociation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return SharedEntityAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $SharedEntityAssociation)
    {
        $prev = $this->SharedEntityAssociation;
        $this->SharedEntityAssociation = $SharedEntityAssociation;
        return $prev;
    }

}
