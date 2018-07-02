<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountPropertyName implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountPropertyName[] $AccountPropertyName
     */
    protected $AccountPropertyName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountPropertyName[]
     */
    public function getAccountPropertyName()
    {
      return $this->AccountPropertyName;
    }

    /**
     * @param AccountPropertyName[] $AccountPropertyName
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAccountPropertyName
     */
    public function setAccountPropertyName(array $AccountPropertyName = null)
    {
      $this->AccountPropertyName = $AccountPropertyName;
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
      return isset($this->AccountPropertyName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountPropertyName
     */
    public function offsetGet($offset)
    {
      return $this->AccountPropertyName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountPropertyName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountPropertyName[] = $value;
      } else {
        $this->AccountPropertyName[$offset] = $value;
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
      unset($this->AccountPropertyName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountPropertyName Return the current element
     */
    public function current()
    {
      return current($this->AccountPropertyName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountPropertyName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountPropertyName);
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
      reset($this->AccountPropertyName);
    }

    /**
     * Countable implementation
     *
     * @return AccountPropertyName Return count of elements
     */
    public function count()
    {
      return count($this->AccountPropertyName);
    }

}
