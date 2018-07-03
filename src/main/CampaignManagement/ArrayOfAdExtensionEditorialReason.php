<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionEditorialReason implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdExtensionEditorialReason[] $AdExtensionEditorialReason
     */
    protected $AdExtensionEditorialReason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionEditorialReason[]
     */
    public function getAdExtensionEditorialReason()
    {
      return $this->AdExtensionEditorialReason;
    }

    /**
     * @param AdExtensionEditorialReason[] $AdExtensionEditorialReason
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionEditorialReason
     */
    public function setAdExtensionEditorialReason(array $AdExtensionEditorialReason = null)
    {
      $this->AdExtensionEditorialReason = $AdExtensionEditorialReason;
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
      return isset($this->AdExtensionEditorialReason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionEditorialReason
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionEditorialReason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionEditorialReason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionEditorialReason[] = $value;
      } else {
        $this->AdExtensionEditorialReason[$offset] = $value;
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
      unset($this->AdExtensionEditorialReason[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdExtensionEditorialReason[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionEditorialReason);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionEditorialReason Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionEditorialReason);
    }

    /**
     * Change the current array with another
     *
     * @return AdExtensionEditorialReason[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionEditorialReason)
    {
        $prev = $this->AdExtensionEditorialReason;
        $this->AdExtensionEditorialReason = $AdExtensionEditorialReason;
        return $prev;
    }

}
