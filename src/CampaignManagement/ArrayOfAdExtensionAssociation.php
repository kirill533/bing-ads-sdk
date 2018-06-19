<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionAssociation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionAssociation[] $AdExtensionAssociation
     */
    protected $AdExtensionAssociation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionAssociation[]
     */
    public function getAdExtensionAssociation()
    {
      return $this->AdExtensionAssociation;
    }

    /**
     * @param AdExtensionAssociation[] $AdExtensionAssociation
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionAssociation
     */
    public function setAdExtensionAssociation(array $AdExtensionAssociation = null)
    {
      $this->AdExtensionAssociation = $AdExtensionAssociation;
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
      return isset($this->AdExtensionAssociation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionAssociation
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionAssociation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionAssociation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionAssociation[] = $value;
      } else {
        $this->AdExtensionAssociation[$offset] = $value;
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
      unset($this->AdExtensionAssociation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionAssociation Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionAssociation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionAssociation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionAssociation);
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
      reset($this->AdExtensionAssociation);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionAssociation Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionAssociation);
    }

}
