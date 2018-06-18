<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdExtensionAssociationCollection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionAssociationCollection[] $AdExtensionAssociationCollection
     */
    protected $AdExtensionAssociationCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionAssociationCollection[]
     */
    public function getAdExtensionAssociationCollection()
    {
      return $this->AdExtensionAssociationCollection;
    }

    /**
     * @param AdExtensionAssociationCollection[] $AdExtensionAssociationCollection
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdExtensionAssociationCollection
     */
    public function setAdExtensionAssociationCollection(array $AdExtensionAssociationCollection = null)
    {
      $this->AdExtensionAssociationCollection = $AdExtensionAssociationCollection;
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
      return isset($this->AdExtensionAssociationCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionAssociationCollection
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionAssociationCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionAssociationCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionAssociationCollection[] = $value;
      } else {
        $this->AdExtensionAssociationCollection[$offset] = $value;
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
      unset($this->AdExtensionAssociationCollection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionAssociationCollection Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionAssociationCollection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionAssociationCollection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionAssociationCollection);
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
      reset($this->AdExtensionAssociationCollection);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionAssociationCollection Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionAssociationCollection);
    }

}
