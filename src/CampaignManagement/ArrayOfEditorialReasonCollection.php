<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfEditorialReasonCollection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EditorialReasonCollection[] $EditorialReasonCollection
     */
    protected $EditorialReasonCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EditorialReasonCollection[]
     */
    public function getEditorialReasonCollection()
    {
      return $this->EditorialReasonCollection;
    }

    /**
     * @param EditorialReasonCollection[] $EditorialReasonCollection
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfEditorialReasonCollection
     */
    public function setEditorialReasonCollection(array $EditorialReasonCollection = null)
    {
      $this->EditorialReasonCollection = $EditorialReasonCollection;
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
      return isset($this->EditorialReasonCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EditorialReasonCollection
     */
    public function offsetGet($offset)
    {
      return $this->EditorialReasonCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EditorialReasonCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EditorialReasonCollection[] = $value;
      } else {
        $this->EditorialReasonCollection[$offset] = $value;
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
      unset($this->EditorialReasonCollection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EditorialReasonCollection Return the current element
     */
    public function current()
    {
      return current($this->EditorialReasonCollection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EditorialReasonCollection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EditorialReasonCollection);
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
      reset($this->EditorialReasonCollection);
    }

    /**
     * Countable implementation
     *
     * @return EditorialReasonCollection Return count of elements
     */
    public function count()
    {
      return count($this->EditorialReasonCollection);
    }

}
