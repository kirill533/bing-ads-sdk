<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMediaMetaData implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return MediaMetaData[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MediaMetaData ?? []);
    }

    /**
     * Countable implementation
     *
     * @return MediaMetaData Return count of elements
     */
    public function count()
    {
        return is_array($this->MediaMetaData) ? count($this->MediaMetaData) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return MediaMetaData[]|null The previous array if present
     */
    public function exchangeArray(array $MediaMetaData)
    {
        $prev = $this->MediaMetaData;
        $this->MediaMetaData = $MediaMetaData;
        return $prev;
    }

}
