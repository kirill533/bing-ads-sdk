<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfVideo implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Video[] $Video
     */
    protected $Video = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Video[]
     */
    public function getVideo()
    {
        return $this->Video;
    }

    /**
     * @param Video[] $Video
     * @return \PMG\BingAds\CampaignManagement\ArrayOfVideo
     */
    public function setVideo(array $Video = null)
    {
        $this->Video = $Video;
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
      return isset($this->Video[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Video
     */
    public function offsetGet($offset)
    {
      return $this->Video[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Video $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Video[] = $value;
      } else {
        $this->Video[$offset] = $value;
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
      unset($this->Video[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Video[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Video ?? []);
    }

    /**
     * Countable implementation
     *
     * @return Video Return count of elements
     */
    public function count()
    {
        return is_array($this->Video) ? count($this->Video) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return Video[]|null The previous array if present
     */
    public function exchangeArray(array $Video)
    {
        $prev = $this->Video;
        $this->Video = $Video;
        return $prev;
    }

}
