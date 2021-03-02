<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfImportJob implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ImportJob[] $ImportJob
     */
    protected $ImportJob = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImportJob[]
     */
    public function getImportJob()
    {
        return $this->ImportJob;
    }

    /**
     * @param ImportJob[] $ImportJob
     * @return \PMG\BingAds\CampaignManagement\ArrayOfImportJob
     */
    public function setImportJob(array $ImportJob = null)
    {
        $this->ImportJob = $ImportJob;
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
      return isset($this->ImportJob[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ImportJob
     */
    public function offsetGet($offset)
    {
      return $this->ImportJob[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ImportJob $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ImportJob[] = $value;
      } else {
        $this->ImportJob[$offset] = $value;
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
      unset($this->ImportJob[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ImportJob[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ImportJob ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ImportJob Return count of elements
     */
    public function count()
    {
        return is_array($this->ImportJob) ? count($this->ImportJob) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ImportJob[]|null The previous array if present
     */
    public function exchangeArray(array $ImportJob)
    {
        $prev = $this->ImportJob;
        $this->ImportJob = $ImportJob;
        return $prev;
    }

}
