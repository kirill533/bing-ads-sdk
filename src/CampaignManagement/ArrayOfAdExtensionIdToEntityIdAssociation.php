<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionIdToEntityIdAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionIdToEntityIdAssociation[] $AdExtensionIdToEntityIdAssociation
     */
    protected $AdExtensionIdToEntityIdAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionIdToEntityIdAssociation[]
     */
    public function getAdExtensionIdToEntityIdAssociation()
    {
      return $this->AdExtensionIdToEntityIdAssociation;
    }

    /**
     * @param AdExtensionIdToEntityIdAssociation[] $AdExtensionIdToEntityIdAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionIdToEntityIdAssociation
     */
    public function setAdExtensionIdToEntityIdAssociation(array $AdExtensionIdToEntityIdAssociation = null)
    {
      $this->AdExtensionIdToEntityIdAssociation = $AdExtensionIdToEntityIdAssociation;
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
      return isset($this->AdExtensionIdToEntityIdAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionIdToEntityIdAssociation
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionIdToEntityIdAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionIdToEntityIdAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionIdToEntityIdAssociation[] = $value;
      } else {
        $this->AdExtensionIdToEntityIdAssociation[$offset] = $value;
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
      unset($this->AdExtensionIdToEntityIdAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionIdToEntityIdAssociation Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionIdToEntityIdAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionIdToEntityIdAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionIdToEntityIdAssociation);
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
      reset($this->AdExtensionIdToEntityIdAssociation);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionIdToEntityIdAssociation Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionIdToEntityIdAssociation);
    }

}
