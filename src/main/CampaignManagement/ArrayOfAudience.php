<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAudience implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return Audience[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Audience);
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

    /**
     * Change the current array with another
     *
     * @return Audience[]|null The previous array if present
     */
    public function exchangeArray(array $Audience)
    {
        $prev = $this->Audience;
        $this->Audience = $Audience;
        return $prev;
    }

}
