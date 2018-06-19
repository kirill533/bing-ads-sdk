<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtension implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtension[] $AdExtension
     */
    protected $AdExtension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtension[]
     */
    public function getAdExtension()
    {
      return $this->AdExtension;
    }

    /**
     * @param AdExtension[] $AdExtension
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdExtension
     */
    public function setAdExtension(array $AdExtension = null)
    {
      $this->AdExtension = $AdExtension;
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
      return isset($this->AdExtension[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtension
     */
    public function offsetGet($offset)
    {
      return $this->AdExtension[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtension $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtension[] = $value;
      } else {
        $this->AdExtension[$offset] = $value;
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
      unset($this->AdExtension[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtension Return the current element
     */
    public function current()
    {
      return current($this->AdExtension);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtension);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtension);
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
      reset($this->AdExtension);
    }

    /**
     * Countable implementation
     *
     * @return AdExtension Return count of elements
     */
    public function count()
    {
      return count($this->AdExtension);
    }

}
