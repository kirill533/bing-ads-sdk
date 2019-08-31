<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionEditorialReasonCollection implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdExtensionEditorialReasonCollection[] $AdExtensionEditorialReasonCollection
     */
    protected $AdExtensionEditorialReasonCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionEditorialReasonCollection[]
     */
    public function getAdExtensionEditorialReasonCollection()
    {
        return $this->AdExtensionEditorialReasonCollection;
    }

    /**
     * @param AdExtensionEditorialReasonCollection[] $AdExtensionEditorialReasonCollection
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionEditorialReasonCollection
     */
    public function setAdExtensionEditorialReasonCollection(array $AdExtensionEditorialReasonCollection = null)
    {
        $this->AdExtensionEditorialReasonCollection = $AdExtensionEditorialReasonCollection;
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
      return isset($this->AdExtensionEditorialReasonCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionEditorialReasonCollection
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionEditorialReasonCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionEditorialReasonCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionEditorialReasonCollection[] = $value;
      } else {
        $this->AdExtensionEditorialReasonCollection[$offset] = $value;
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
      unset($this->AdExtensionEditorialReasonCollection[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdExtensionEditorialReasonCollection[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionEditorialReasonCollection);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionEditorialReasonCollection Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionEditorialReasonCollection);
    }

    /**
     * Change the current array with another
     *
     * @return AdExtensionEditorialReasonCollection[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionEditorialReasonCollection)
    {
        $prev = $this->AdExtensionEditorialReasonCollection;
        $this->AdExtensionEditorialReasonCollection = $AdExtensionEditorialReasonCollection;
        return $prev;
    }

}
