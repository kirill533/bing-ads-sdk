<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionAssociation implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtensionAssociation[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionAssociation);
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

    /**
     * Change the current array with another
     *
     * @return AdExtensionAssociation[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionAssociation)
    {
        $prev = $this->AdExtensionAssociation;
        $this->AdExtensionAssociation = $AdExtensionAssociation;
        return $prev;
    }

}
