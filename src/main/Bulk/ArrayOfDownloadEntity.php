<?php

namespace PMG\BingAds\Bulk;

class ArrayOfDownloadEntity implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return DownloadEntity Return the current element
     */
    public function current()
    {
      return current($this->DownloadEntity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DownloadEntity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DownloadEntity);
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
      reset($this->DownloadEntity);
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

}
