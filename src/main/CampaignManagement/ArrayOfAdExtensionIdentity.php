<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtensionIdentity implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdExtensionIdentity[] $AdExtensionIdentity
     */
    protected $AdExtensionIdentity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionIdentity[]
     */
    public function getAdExtensionIdentity()
    {
      return $this->AdExtensionIdentity;
    }

    /**
     * @param AdExtensionIdentity[] $AdExtensionIdentity
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtensionIdentity
     */
    public function setAdExtensionIdentity(array $AdExtensionIdentity = null)
    {
      $this->AdExtensionIdentity = $AdExtensionIdentity;
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
      return isset($this->AdExtensionIdentity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionIdentity
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionIdentity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionIdentity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionIdentity[] = $value;
      } else {
        $this->AdExtensionIdentity[$offset] = $value;
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
      unset($this->AdExtensionIdentity[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdExtensionIdentity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionIdentity);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionIdentity Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionIdentity);
    }

    /**
     * Change the current array with another
     *
     * @return AdExtensionIdentity[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionIdentity)
    {
        $prev = $this->AdExtensionIdentity;
        $this->AdExtensionIdentity = $AdExtensionIdentity;
        return $prev;
    }

}
