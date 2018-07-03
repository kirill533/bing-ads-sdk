<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfMigrationStatusInfo implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return MigrationStatusInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MigrationStatusInfo);
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

    /**
     * Change the current array with another
     *
     * @return MigrationStatusInfo[]|null The previous array if present
     */
    public function exchangeArray(array $MigrationStatusInfo)
    {
        $prev = $this->MigrationStatusInfo;
        $this->MigrationStatusInfo = $MigrationStatusInfo;
        return $prev;
    }

}
