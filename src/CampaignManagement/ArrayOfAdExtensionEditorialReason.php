<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdExtensionEditorialReason implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdExtensionEditorialReason
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
     * Iterator implementation
     *
     * @return AdExtensionEditorialReason Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionEditorialReason);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionEditorialReason);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionEditorialReason);
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
      reset($this->AdExtensionEditorialReason);
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

}
