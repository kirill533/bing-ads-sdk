<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdExtensionEditorialReasonCollection implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdExtensionEditorialReasonCollection
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
     * Iterator implementation
     *
     * @return AdExtensionEditorialReasonCollection Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionEditorialReasonCollection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionEditorialReasonCollection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionEditorialReasonCollection);
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
      reset($this->AdExtensionEditorialReasonCollection);
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

}
