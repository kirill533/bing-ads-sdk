<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEditorialReasonCollection implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEditorialReasonCollection
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
     * Traversable Implementation
     *
     * @return EditorialReasonCollection[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EditorialReasonCollection ?? []);
    }

    /**
     * Countable implementation
     *
     * @return EditorialReasonCollection Return count of elements
     */
    public function count()
    {
        return is_array($this->EditorialReasonCollection) ? count($this->EditorialReasonCollection) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return EditorialReasonCollection[]|null The previous array if present
     */
    public function exchangeArray(array $EditorialReasonCollection)
    {
        $prev = $this->EditorialReasonCollection;
        $this->EditorialReasonCollection = $EditorialReasonCollection;
        return $prev;
    }

}
