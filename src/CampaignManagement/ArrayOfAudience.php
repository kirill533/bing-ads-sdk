<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAudience implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Audience[] $Audience
     */
    protected $Audience = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Audience[]
     */
    public function getAudience()
    {
      return $this->Audience;
    }

    /**
     * @param Audience[] $Audience
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAudience
     */
    public function setAudience(array $Audience = null)
    {
      $this->Audience = $Audience;
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
      return isset($this->Audience[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Audience
     */
    public function offsetGet($offset)
    {
      return $this->Audience[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Audience $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Audience[] = $value;
      } else {
        $this->Audience[$offset] = $value;
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
      unset($this->Audience[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Audience Return the current element
     */
    public function current()
    {
      return current($this->Audience);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Audience);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Audience);
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
      reset($this->Audience);
    }

    /**
     * Countable implementation
     *
     * @return Audience Return count of elements
     */
    public function count()
    {
      return count($this->Audience);
    }

}
