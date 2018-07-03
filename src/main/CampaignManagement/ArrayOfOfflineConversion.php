<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfOfflineConversion implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfOfflineConversion
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
     * Traversable Implementation
     *
     * @return OfflineConversion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->OfflineConversion);
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

    /**
     * Change the current array with another
     *
     * @return OfflineConversion[]|null The previous array if present
     */
    public function exchangeArray(array $OfflineConversion)
    {
        $prev = $this->OfflineConversion;
        $this->OfflineConversion = $OfflineConversion;
        return $prev;
    }

}
