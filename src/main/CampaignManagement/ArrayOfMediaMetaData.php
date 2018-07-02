<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMediaMetaData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaMetaData[] $MediaMetaData
     */
    protected $MediaMetaData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaMetaData[]
     */
    public function getMediaMetaData()
    {
      return $this->MediaMetaData;
    }

    /**
     * @param MediaMetaData[] $MediaMetaData
     * @return \PMG\BingAds\CampaignManagement\ArrayOfMediaMetaData
     */
    public function setMediaMetaData(array $MediaMetaData = null)
    {
      $this->MediaMetaData = $MediaMetaData;
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
      return isset($this->MediaMetaData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaMetaData
     */
    public function offsetGet($offset)
    {
      return $this->MediaMetaData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaMetaData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaMetaData[] = $value;
      } else {
        $this->MediaMetaData[$offset] = $value;
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
      unset($this->MediaMetaData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaMetaData Return the current element
     */
    public function current()
    {
      return current($this->MediaMetaData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaMetaData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaMetaData);
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
      reset($this->MediaMetaData);
    }

    /**
     * Countable implementation
     *
     * @return MediaMetaData Return count of elements
     */
    public function count()
    {
      return count($this->MediaMetaData);
    }

}
