<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountProperty implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AccountProperty[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountProperty);
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

    /**
     * Change the current array with another
     *
     * @return AccountProperty[]|null The previous array if present
     */
    public function exchangeArray(array $AccountProperty)
    {
        $prev = $this->AccountProperty;
        $this->AccountProperty = $AccountProperty;
        return $prev;
    }

}
