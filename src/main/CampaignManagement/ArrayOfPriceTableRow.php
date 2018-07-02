<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfPriceTableRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceTableRow[] $PriceTableRow
     */
    protected $PriceTableRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceTableRow[]
     */
    public function getPriceTableRow()
    {
      return $this->PriceTableRow;
    }

    /**
     * @param PriceTableRow[] $PriceTableRow
     * @return \PMG\BingAds\CampaignManagement\ArrayOfPriceTableRow
     */
    public function setPriceTableRow(array $PriceTableRow = null)
    {
      $this->PriceTableRow = $PriceTableRow;
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
      return isset($this->PriceTableRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceTableRow
     */
    public function offsetGet($offset)
    {
      return $this->PriceTableRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceTableRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PriceTableRow[] = $value;
      } else {
        $this->PriceTableRow[$offset] = $value;
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
      unset($this->PriceTableRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceTableRow Return the current element
     */
    public function current()
    {
      return current($this->PriceTableRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceTableRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceTableRow);
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
      reset($this->PriceTableRow);
    }

    /**
     * Countable implementation
     *
     * @return PriceTableRow Return count of elements
     */
    public function count()
    {
      return count($this->PriceTableRow);
    }

}
