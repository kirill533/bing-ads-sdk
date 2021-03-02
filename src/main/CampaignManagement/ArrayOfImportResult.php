<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfImportResult implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ImportResult[] $ImportResult
     */
    protected $ImportResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImportResult[]
     */
    public function getImportResult()
    {
        return $this->ImportResult;
    }

    /**
     * @param ImportResult[] $ImportResult
     * @return \PMG\BingAds\CampaignManagement\ArrayOfImportResult
     */
    public function setImportResult(array $ImportResult = null)
    {
        $this->ImportResult = $ImportResult;
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
      return isset($this->ImportResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ImportResult
     */
    public function offsetGet($offset)
    {
      return $this->ImportResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ImportResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ImportResult[] = $value;
      } else {
        $this->ImportResult[$offset] = $value;
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
      unset($this->ImportResult[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ImportResult[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ImportResult ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ImportResult Return count of elements
     */
    public function count()
    {
        return is_array($this->ImportResult) ? count($this->ImportResult) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ImportResult[]|null The previous array if present
     */
    public function exchangeArray(array $ImportResult)
    {
        $prev = $this->ImportResult;
        $this->ImportResult = $ImportResult;
        return $prev;
    }

}
