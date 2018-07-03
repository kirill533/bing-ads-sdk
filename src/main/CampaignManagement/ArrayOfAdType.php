<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdType implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdType[] $AdType
     */
    protected $AdType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdType[]
     */
    public function getAdType()
    {
      return $this->AdType;
    }

    /**
     * @param AdType[] $AdType
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdType
     */
    public function setAdType(array $AdType = null)
    {
      $this->AdType = $AdType;
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
      return isset($this->AdType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdType
     */
    public function offsetGet($offset)
    {
      return $this->AdType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdType[] = $value;
      } else {
        $this->AdType[$offset] = $value;
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
      unset($this->AdType[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdType[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdType);
    }

    /**
     * Countable implementation
     *
     * @return AdType Return count of elements
     */
    public function count()
    {
      return count($this->AdType);
    }

    /**
     * Change the current array with another
     *
     * @return AdType[]|null The previous array if present
     */
    public function exchangeArray(array $AdType)
    {
        $prev = $this->AdType;
        $this->AdType = $AdType;
        return $prev;
    }

}
