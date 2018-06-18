<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfArrayOfMediaAssociation implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfArrayOfMediaAssociation
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
     * Iterator implementation
     *
     * @return ArrayOfMediaAssociation Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfMediaAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfMediaAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfMediaAssociation);
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
      reset($this->ArrayOfMediaAssociation);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfMediaAssociation Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfMediaAssociation);
    }

}
