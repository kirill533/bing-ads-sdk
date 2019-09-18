<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEditorialReason implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var EditorialReason[] $EditorialReason
     */
    protected $EditorialReason = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EditorialReason[]
     */
    public function getEditorialReason()
    {
        return $this->EditorialReason;
    }

    /**
     * @param EditorialReason[] $EditorialReason
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEditorialReason
     */
    public function setEditorialReason(array $EditorialReason = null)
    {
        $this->EditorialReason = $EditorialReason;
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
      return isset($this->EditorialReason[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EditorialReason
     */
    public function offsetGet($offset)
    {
      return $this->EditorialReason[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EditorialReason $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EditorialReason[] = $value;
      } else {
        $this->EditorialReason[$offset] = $value;
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
      unset($this->EditorialReason[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return EditorialReason[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EditorialReason ?? []);
    }

    /**
     * Countable implementation
     *
     * @return EditorialReason Return count of elements
     */
    public function count()
    {
        return is_array($this->EditorialReason) ? count($this->EditorialReason) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return EditorialReason[]|null The previous array if present
     */
    public function exchangeArray(array $EditorialReason)
    {
        $prev = $this->EditorialReason;
        $this->EditorialReason = $EditorialReason;
        return $prev;
    }

}
