<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfImportEntityStatistics implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ImportEntityStatistics[] $ImportEntityStatistics
     */
    protected $ImportEntityStatistics = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImportEntityStatistics[]
     */
    public function getImportEntityStatistics()
    {
        return $this->ImportEntityStatistics;
    }

    /**
     * @param ImportEntityStatistics[] $ImportEntityStatistics
     * @return \PMG\BingAds\CampaignManagement\ArrayOfImportEntityStatistics
     */
    public function setImportEntityStatistics(array $ImportEntityStatistics = null)
    {
        $this->ImportEntityStatistics = $ImportEntityStatistics;
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
      return isset($this->ImportEntityStatistics[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ImportEntityStatistics
     */
    public function offsetGet($offset)
    {
      return $this->ImportEntityStatistics[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ImportEntityStatistics $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ImportEntityStatistics[] = $value;
      } else {
        $this->ImportEntityStatistics[$offset] = $value;
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
      unset($this->ImportEntityStatistics[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ImportEntityStatistics[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ImportEntityStatistics ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ImportEntityStatistics Return count of elements
     */
    public function count()
    {
        return is_array($this->ImportEntityStatistics) ? count($this->ImportEntityStatistics) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ImportEntityStatistics[]|null The previous array if present
     */
    public function exchangeArray(array $ImportEntityStatistics)
    {
        $prev = $this->ImportEntityStatistics;
        $this->ImportEntityStatistics = $ImportEntityStatistics;
        return $prev;
    }

}
