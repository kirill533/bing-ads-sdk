<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfPriceTableRow implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return PriceTableRow[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->PriceTableRow ?? []);
    }

    /**
     * Countable implementation
     *
     * @return PriceTableRow Return count of elements
     */
    public function count()
    {
        return is_array($this->PriceTableRow) ? count($this->PriceTableRow) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return PriceTableRow[]|null The previous array if present
     */
    public function exchangeArray(array $PriceTableRow)
    {
        $prev = $this->PriceTableRow;
        $this->PriceTableRow = $PriceTableRow;
        return $prev;
    }

}
