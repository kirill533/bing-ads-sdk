<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountProperty[] $AccountProperty
     */
    protected $AccountProperty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountProperty[]
     */
    public function getAccountProperty()
    {
      return $this->AccountProperty;
    }

    /**
     * @param AccountProperty[] $AccountProperty
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAccountProperty
     */
    public function setAccountProperty(array $AccountProperty = null)
    {
      $this->AccountProperty = $AccountProperty;
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
      return isset($this->AccountProperty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountProperty
     */
    public function offsetGet($offset)
    {
      return $this->AccountProperty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountProperty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountProperty[] = $value;
      } else {
        $this->AccountProperty[$offset] = $value;
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
      unset($this->AccountProperty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountProperty Return the current element
     */
    public function current()
    {
      return current($this->AccountProperty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountProperty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountProperty);
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
      reset($this->AccountProperty);
    }

    /**
     * Countable implementation
     *
     * @return AccountProperty Return count of elements
     */
    public function count()
    {
      return count($this->AccountProperty);
    }

}
