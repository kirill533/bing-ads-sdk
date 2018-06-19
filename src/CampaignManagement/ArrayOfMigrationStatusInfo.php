<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMigrationStatusInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MigrationStatusInfo[] $MigrationStatusInfo
     */
    protected $MigrationStatusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MigrationStatusInfo[]
     */
    public function getMigrationStatusInfo()
    {
      return $this->MigrationStatusInfo;
    }

    /**
     * @param MigrationStatusInfo[] $MigrationStatusInfo
     * @return \PMG\BingAds\CampaignManagement\ArrayOfMigrationStatusInfo
     */
    public function setMigrationStatusInfo(array $MigrationStatusInfo = null)
    {
      $this->MigrationStatusInfo = $MigrationStatusInfo;
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
      return isset($this->MigrationStatusInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MigrationStatusInfo
     */
    public function offsetGet($offset)
    {
      return $this->MigrationStatusInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MigrationStatusInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MigrationStatusInfo[] = $value;
      } else {
        $this->MigrationStatusInfo[$offset] = $value;
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
      unset($this->MigrationStatusInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MigrationStatusInfo Return the current element
     */
    public function current()
    {
      return current($this->MigrationStatusInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MigrationStatusInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MigrationStatusInfo);
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
      reset($this->MigrationStatusInfo);
    }

    /**
     * Countable implementation
     *
     * @return MigrationStatusInfo Return count of elements
     */
    public function count()
    {
      return count($this->MigrationStatusInfo);
    }

}
