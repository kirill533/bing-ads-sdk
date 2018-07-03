<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSharedListItem implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var SharedListItem[] $SharedListItem
     */
    protected $SharedListItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedListItem[]
     */
    public function getSharedListItem()
    {
      return $this->SharedListItem;
    }

    /**
     * @param SharedListItem[] $SharedListItem
     * @return \PMG\BingAds\CampaignManagement\ArrayOfSharedListItem
     */
    public function setSharedListItem(array $SharedListItem = null)
    {
      $this->SharedListItem = $SharedListItem;
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
      return isset($this->SharedListItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SharedListItem
     */
    public function offsetGet($offset)
    {
      return $this->SharedListItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SharedListItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SharedListItem[] = $value;
      } else {
        $this->SharedListItem[$offset] = $value;
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
      unset($this->SharedListItem[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return SharedListItem[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SharedListItem);
    }

    /**
     * Countable implementation
     *
     * @return SharedListItem Return count of elements
     */
    public function count()
    {
      return count($this->SharedListItem);
    }

    /**
     * Change the current array with another
     *
     * @return SharedListItem[]|null The previous array if present
     */
    public function exchangeArray(array $SharedListItem)
    {
        $prev = $this->SharedListItem;
        $this->SharedListItem = $SharedListItem;
        return $prev;
    }

}
