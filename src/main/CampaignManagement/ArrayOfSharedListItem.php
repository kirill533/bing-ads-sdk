<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSharedListItem implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return SharedListItem Return the current element
     */
    public function current()
    {
      return current($this->SharedListItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SharedListItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SharedListItem);
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
      reset($this->SharedListItem);
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

}
