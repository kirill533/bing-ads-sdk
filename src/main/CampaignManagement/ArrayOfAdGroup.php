<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAdGroup implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AdGroup[] $AdGroup
     */
    protected $AdGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroup[]
     */
    public function getAdGroup()
    {
        return $this->AdGroup;
    }

    /**
     * @param AdGroup[] $AdGroup
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAdGroup
     */
    public function setAdGroup(array $AdGroup = null)
    {
        $this->AdGroup = $AdGroup;
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
      return isset($this->AdGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroup
     */
    public function offsetGet($offset)
    {
      return $this->AdGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroup[] = $value;
      } else {
        $this->AdGroup[$offset] = $value;
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
      unset($this->AdGroup[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AdGroup[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroup ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AdGroup Return count of elements
     */
    public function count()
    {
        return is_array($this->AdGroup) ? count($this->AdGroup) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AdGroup[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroup)
    {
        $prev = $this->AdGroup;
        $this->AdGroup = $AdGroup;
        return $prev;
    }

}
