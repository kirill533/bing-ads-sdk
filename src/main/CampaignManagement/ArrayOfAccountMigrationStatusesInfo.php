<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountMigrationStatusesInfo implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AccountMigrationStatusesInfo[] $AccountMigrationStatusesInfo
     */
    protected $AccountMigrationStatusesInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountMigrationStatusesInfo[]
     */
    public function getAccountMigrationStatusesInfo()
    {
      return $this->AccountMigrationStatusesInfo;
    }

    /**
     * @param AccountMigrationStatusesInfo[] $AccountMigrationStatusesInfo
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAccountMigrationStatusesInfo
     */
    public function setAccountMigrationStatusesInfo(array $AccountMigrationStatusesInfo = null)
    {
      $this->AccountMigrationStatusesInfo = $AccountMigrationStatusesInfo;
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
      return isset($this->AccountMigrationStatusesInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountMigrationStatusesInfo
     */
    public function offsetGet($offset)
    {
      return $this->AccountMigrationStatusesInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountMigrationStatusesInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccountMigrationStatusesInfo[] = $value;
      } else {
        $this->AccountMigrationStatusesInfo[$offset] = $value;
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
      unset($this->AccountMigrationStatusesInfo[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AccountMigrationStatusesInfo[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AccountMigrationStatusesInfo);
    }

    /**
     * Countable implementation
     *
     * @return AccountMigrationStatusesInfo Return count of elements
     */
    public function count()
    {
      return count($this->AccountMigrationStatusesInfo);
    }

    /**
     * Change the current array with another
     *
     * @return AccountMigrationStatusesInfo[]|null The previous array if present
     */
    public function exchangeArray(array $AccountMigrationStatusesInfo)
    {
        $prev = $this->AccountMigrationStatusesInfo;
        $this->AccountMigrationStatusesInfo = $AccountMigrationStatusesInfo;
        return $prev;
    }

}
