<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfOfflineConversionAdjustment implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var OfflineConversionAdjustment[] $OfflineConversionAdjustment
     */
    protected $OfflineConversionAdjustment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OfflineConversionAdjustment[]
     */
    public function getOfflineConversionAdjustment()
    {
        return $this->OfflineConversionAdjustment;
    }

    /**
     * @param OfflineConversionAdjustment[] $OfflineConversionAdjustment
     * @return \PMG\BingAds\CampaignManagement\ArrayOfOfflineConversionAdjustment
     */
    public function setOfflineConversionAdjustment(array $OfflineConversionAdjustment = null)
    {
        $this->OfflineConversionAdjustment = $OfflineConversionAdjustment;
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
      return isset($this->OfflineConversionAdjustment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OfflineConversionAdjustment
     */
    public function offsetGet($offset)
    {
      return $this->OfflineConversionAdjustment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OfflineConversionAdjustment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OfflineConversionAdjustment[] = $value;
      } else {
        $this->OfflineConversionAdjustment[$offset] = $value;
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
      unset($this->OfflineConversionAdjustment[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return OfflineConversionAdjustment[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->OfflineConversionAdjustment ?? []);
    }

    /**
     * Countable implementation
     *
     * @return OfflineConversionAdjustment Return count of elements
     */
    public function count()
    {
        return is_array($this->OfflineConversionAdjustment) ? count($this->OfflineConversionAdjustment) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return OfflineConversionAdjustment[]|null The previous array if present
     */
    public function exchangeArray(array $OfflineConversionAdjustment)
    {
        $prev = $this->OfflineConversionAdjustment;
        $this->OfflineConversionAdjustment = $OfflineConversionAdjustment;
        return $prev;
    }

}
