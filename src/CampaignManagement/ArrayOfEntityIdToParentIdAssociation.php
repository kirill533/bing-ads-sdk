<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfEntityIdToParentIdAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EntityIdToParentIdAssociation[] $EntityIdToParentIdAssociation
     */
    protected $EntityIdToParentIdAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EntityIdToParentIdAssociation[]
     */
    public function getEntityIdToParentIdAssociation()
    {
      return $this->EntityIdToParentIdAssociation;
    }

    /**
     * @param EntityIdToParentIdAssociation[] $EntityIdToParentIdAssociation
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfEntityIdToParentIdAssociation
     */
    public function setEntityIdToParentIdAssociation(array $EntityIdToParentIdAssociation = null)
    {
      $this->EntityIdToParentIdAssociation = $EntityIdToParentIdAssociation;
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
      return isset($this->EntityIdToParentIdAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EntityIdToParentIdAssociation
     */
    public function offsetGet($offset)
    {
      return $this->EntityIdToParentIdAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EntityIdToParentIdAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EntityIdToParentIdAssociation[] = $value;
      } else {
        $this->EntityIdToParentIdAssociation[$offset] = $value;
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
      unset($this->EntityIdToParentIdAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EntityIdToParentIdAssociation Return the current element
     */
    public function current()
    {
      return current($this->EntityIdToParentIdAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EntityIdToParentIdAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EntityIdToParentIdAssociation);
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
      reset($this->EntityIdToParentIdAssociation);
    }

    /**
     * Countable implementation
     *
     * @return EntityIdToParentIdAssociation Return count of elements
     */
    public function count()
    {
      return count($this->EntityIdToParentIdAssociation);
    }

}
