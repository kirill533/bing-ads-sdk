<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSharedEntityAssociation implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return SharedEntityAssociation Return the current element
     */
    public function current()
    {
      return current($this->SharedEntityAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SharedEntityAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SharedEntityAssociation);
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
      reset($this->SharedEntityAssociation);
    }

    /**
     * Countable implementation
     *
     * @return SharedEntityAssociation Return count of elements
     */
    public function count()
    {
      return count($this->SharedEntityAssociation);
    }

}
