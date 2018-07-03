<?php

namespace PMG\BingAds\Bulk;

class ArrayOfDownloadEntity implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var DownloadEntity[] $DownloadEntity
     */
    protected $DownloadEntity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DownloadEntity[]
     */
    public function getDownloadEntity()
    {
      return $this->DownloadEntity;
    }

    /**
     * @param DownloadEntity[] $DownloadEntity
     * @return \PMG\BingAds\Bulk\ArrayOfDownloadEntity
     */
    public function setDownloadEntity(array $DownloadEntity = null)
    {
      $this->DownloadEntity = $DownloadEntity;
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
      return isset($this->DownloadEntity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DownloadEntity
     */
    public function offsetGet($offset)
    {
      return $this->DownloadEntity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DownloadEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DownloadEntity[] = $value;
      } else {
        $this->DownloadEntity[$offset] = $value;
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
      unset($this->DownloadEntity[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return DownloadEntity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->DownloadEntity);
    }

    /**
     * Countable implementation
     *
     * @return DownloadEntity Return count of elements
     */
    public function count()
    {
      return count($this->DownloadEntity);
    }

    /**
     * Change the current array with another
     *
     * @return DownloadEntity[]|null The previous array if present
     */
    public function exchangeArray(array $DownloadEntity)
    {
        $prev = $this->DownloadEntity;
        $this->DownloadEntity = $DownloadEntity;
        return $prev;
    }

}
