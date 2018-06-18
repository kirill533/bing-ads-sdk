<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfOfflineConversion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OfflineConversion[] $OfflineConversion
     */
    protected $OfflineConversion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OfflineConversion[]
     */
    public function getOfflineConversion()
    {
      return $this->OfflineConversion;
    }

    /**
     * @param OfflineConversion[] $OfflineConversion
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfOfflineConversion
     */
    public function setOfflineConversion(array $OfflineConversion = null)
    {
      $this->OfflineConversion = $OfflineConversion;
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
      return isset($this->OfflineConversion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OfflineConversion
     */
    public function offsetGet($offset)
    {
      return $this->OfflineConversion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OfflineConversion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OfflineConversion[] = $value;
      } else {
        $this->OfflineConversion[$offset] = $value;
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
      unset($this->OfflineConversion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OfflineConversion Return the current element
     */
    public function current()
    {
      return current($this->OfflineConversion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OfflineConversion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OfflineConversion);
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
      reset($this->OfflineConversion);
    }

    /**
     * Countable implementation
     *
     * @return OfflineConversion Return count of elements
     */
    public function count()
    {
      return count($this->OfflineConversion);
    }

}
