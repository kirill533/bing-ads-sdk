<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountPropertyName implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AccountPropertyName[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountPropertyName);
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

    /**
     * Change the current array with another
     *
     * @return AccountPropertyName[]|null The previous array if present
     */
    public function exchangeArray(array $AccountPropertyName)
    {
        $prev = $this->AccountPropertyName;
        $this->AccountPropertyName = $AccountPropertyName;
        return $prev;
    }

}
