<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignSize implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CampaignSize[] $CampaignSize
     */
    protected $CampaignSize = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignSize[]
     */
    public function getCampaignSize()
    {
      return $this->CampaignSize;
    }

    /**
     * @param CampaignSize[] $CampaignSize
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaignSize
     */
    public function setCampaignSize(array $CampaignSize = null)
    {
      $this->CampaignSize = $CampaignSize;
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
      return isset($this->CampaignSize[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignSize
     */
    public function offsetGet($offset)
    {
      return $this->CampaignSize[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignSize $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignSize[] = $value;
      } else {
        $this->CampaignSize[$offset] = $value;
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
      unset($this->CampaignSize[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CampaignSize Return the current element
     */
    public function current()
    {
      return current($this->CampaignSize);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CampaignSize);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CampaignSize);
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
      reset($this->CampaignSize);
    }

    /**
     * Countable implementation
     *
     * @return CampaignSize Return count of elements
     */
    public function count()
    {
      return count($this->CampaignSize);
    }

}
