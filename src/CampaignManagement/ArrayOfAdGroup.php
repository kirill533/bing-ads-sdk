<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdGroup implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdGroup
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
     * Iterator implementation
     *
     * @return AdGroup Return the current element
     */
    public function current()
    {
      return current($this->AdGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroup);
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
      reset($this->AdGroup);
    }

    /**
     * Countable implementation
     *
     * @return AdGroup Return count of elements
     */
    public function count()
    {
      return count($this->AdGroup);
    }

}
