<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionAssociationCollection implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionAssociationCollection
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
     * Traversable Implementation
     *
     * @return AdExtensionAssociationCollection[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionAssociationCollection ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionAssociationCollection Return count of elements
     */
    public function count()
    {
        return is_array($this->AdExtensionAssociationCollection) ? count($this->AdExtensionAssociationCollection) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdExtensionAssociationCollection[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionAssociationCollection)
    {
        $prev = $this->AdExtensionAssociationCollection;
        $this->AdExtensionAssociationCollection = $AdExtensionAssociationCollection;
        return $prev;
    }

}
