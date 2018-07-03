<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEntityIdToParentIdAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEntityIdToParentIdAssociation
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
     * Traversable Implementation
     *
     * @return EntityIdToParentIdAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EntityIdToParentIdAssociation);
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

    /**
     * Change the current array with another
     *
     * @return EntityIdToParentIdAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $EntityIdToParentIdAssociation)
    {
        $prev = $this->EntityIdToParentIdAssociation;
        $this->EntityIdToParentIdAssociation = $EntityIdToParentIdAssociation;
        return $prev;
    }

}
