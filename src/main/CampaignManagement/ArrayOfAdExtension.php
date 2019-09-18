<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdExtension implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtension[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtension ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdExtension Return count of elements
     */
    public function count()
    {
        return is_array($this->AdExtension) ? count($this->AdExtension) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdExtension[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtension)
    {
        $prev = $this->AdExtension;
        $this->AdExtension = $AdExtension;
        return $prev;
    }

}
