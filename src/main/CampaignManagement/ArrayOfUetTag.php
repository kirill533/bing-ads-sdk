<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfUetTag implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var UetTag[] $UetTag
     */
    protected $UetTag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UetTag[]
     */
    public function getUetTag()
    {
        return $this->UetTag;
    }

    /**
     * @param UetTag[] $UetTag
     * @return \PMG\BingAds\CampaignManagement\ArrayOfUetTag
     */
    public function setUetTag(array $UetTag = null)
    {
        $this->UetTag = $UetTag;
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
      return isset($this->UetTag[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UetTag
     */
    public function offsetGet($offset)
    {
      return $this->UetTag[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UetTag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UetTag[] = $value;
      } else {
        $this->UetTag[$offset] = $value;
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
      unset($this->UetTag[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return UetTag[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->UetTag);
    }

    /**
     * Countable implementation
     *
     * @return UetTag Return count of elements
     */
    public function count()
    {
      return count($this->UetTag);
    }

    /**
     * Change the current array with another
     *
     * @return UetTag[]|null The previous array if present
     */
    public function exchangeArray(array $UetTag)
    {
        $prev = $this->UetTag;
        $this->UetTag = $UetTag;
        return $prev;
    }

}
