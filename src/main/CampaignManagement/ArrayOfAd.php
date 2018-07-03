<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAd implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return Ad[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Ad);
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

    /**
     * Change the current array with another
     *
     * @return Ad[]|null The previous array if present
     */
    public function exchangeArray(array $Ad)
    {
        $prev = $this->Ad;
        $this->Ad = $Ad;
        return $prev;
    }

}
