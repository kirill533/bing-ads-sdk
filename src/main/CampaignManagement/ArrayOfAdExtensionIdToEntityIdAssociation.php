<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionIdToEntityIdAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtensionIdToEntityIdAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionIdToEntityIdAssociation ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionIdToEntityIdAssociation Return count of elements
     */
    public function count()
    {
        return is_array($this->AdExtensionIdToEntityIdAssociation) ? count($this->AdExtensionIdToEntityIdAssociation) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdExtensionIdToEntityIdAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionIdToEntityIdAssociation)
    {
        $prev = $this->AdExtensionIdToEntityIdAssociation;
        $this->AdExtensionIdToEntityIdAssociation = $AdExtensionIdToEntityIdAssociation;
        return $prev;
    }

}
