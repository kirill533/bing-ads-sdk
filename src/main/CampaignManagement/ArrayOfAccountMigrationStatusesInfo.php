<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAccountMigrationStatusesInfo implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return AccountMigrationStatusesInfo Return the current element
     */
    public function current()
    {
      return current($this->AccountMigrationStatusesInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountMigrationStatusesInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountMigrationStatusesInfo);
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
      reset($this->AccountMigrationStatusesInfo);
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

}
