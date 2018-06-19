<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAd implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Ad[] $Ad
     */
    protected $Ad = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Ad[]
     */
    public function getAd()
    {
      return $this->Ad;
    }

    /**
     * @param Ad[] $Ad
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAd
     */
    public function setAd(array $Ad = null)
    {
      $this->Ad = $Ad;
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
      return isset($this->Ad[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Ad
     */
    public function offsetGet($offset)
    {
      return $this->Ad[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Ad $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Ad[] = $value;
      } else {
        $this->Ad[$offset] = $value;
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
      unset($this->Ad[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Ad Return the current element
     */
    public function current()
    {
      return current($this->Ad);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Ad);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Ad);
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
      reset($this->Ad);
    }

    /**
     * Countable implementation
     *
     * @return Ad Return count of elements
     */
    public function count()
    {
      return count($this->Ad);
    }

}
