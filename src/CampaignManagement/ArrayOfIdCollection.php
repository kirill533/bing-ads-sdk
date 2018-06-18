<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfIdCollection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var IdCollection[] $IdCollection
     */
    protected $IdCollection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IdCollection[]
     */
    public function getIdCollection()
    {
      return $this->IdCollection;
    }

    /**
     * @param IdCollection[] $IdCollection
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfIdCollection
     */
    public function setIdCollection(array $IdCollection = null)
    {
      $this->IdCollection = $IdCollection;
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
      return isset($this->IdCollection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return IdCollection
     */
    public function offsetGet($offset)
    {
      return $this->IdCollection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param IdCollection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->IdCollection[] = $value;
      } else {
        $this->IdCollection[$offset] = $value;
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
      unset($this->IdCollection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return IdCollection Return the current element
     */
    public function current()
    {
      return current($this->IdCollection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->IdCollection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->IdCollection);
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
      reset($this->IdCollection);
    }

    /**
     * Countable implementation
     *
     * @return IdCollection Return count of elements
     */
    public function count()
    {
      return count($this->IdCollection);
    }

}
