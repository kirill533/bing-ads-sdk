<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfArrayOfMediaAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ArrayOfMediaAssociation[] $ArrayOfMediaAssociation
     */
    protected $ArrayOfMediaAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfMediaAssociation[]
     */
    public function getArrayOfMediaAssociation()
    {
        return $this->ArrayOfMediaAssociation;
    }

    /**
     * @param ArrayOfMediaAssociation[] $ArrayOfMediaAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfArrayOfMediaAssociation
     */
    public function setArrayOfMediaAssociation(array $ArrayOfMediaAssociation = null)
    {
        $this->ArrayOfMediaAssociation = $ArrayOfMediaAssociation;
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
      return isset($this->ArrayOfMediaAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfMediaAssociation
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfMediaAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfMediaAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfMediaAssociation[] = $value;
      } else {
        $this->ArrayOfMediaAssociation[$offset] = $value;
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
      unset($this->ArrayOfMediaAssociation[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ArrayOfMediaAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ArrayOfMediaAssociation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfMediaAssociation Return count of elements
     */
    public function count()
    {
        return is_array($this->ArrayOfMediaAssociation) ? count($this->ArrayOfMediaAssociation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ArrayOfMediaAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $ArrayOfMediaAssociation)
    {
        $prev = $this->ArrayOfMediaAssociation;
        $this->ArrayOfMediaAssociation = $ArrayOfMediaAssociation;
        return $prev;
    }

}
