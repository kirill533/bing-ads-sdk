<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfSharedEntity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SharedEntity[] $SharedEntity
     */
    protected $SharedEntity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedEntity[]
     */
    public function getSharedEntity()
    {
      return $this->SharedEntity;
    }

    /**
     * @param SharedEntity[] $SharedEntity
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfSharedEntity
     */
    public function setSharedEntity(array $SharedEntity = null)
    {
      $this->SharedEntity = $SharedEntity;
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
      return isset($this->SharedEntity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SharedEntity
     */
    public function offsetGet($offset)
    {
      return $this->SharedEntity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SharedEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SharedEntity[] = $value;
      } else {
        $this->SharedEntity[$offset] = $value;
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
      unset($this->SharedEntity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SharedEntity Return the current element
     */
    public function current()
    {
      return current($this->SharedEntity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SharedEntity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SharedEntity);
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
      reset($this->SharedEntity);
    }

    /**
     * Countable implementation
     *
     * @return SharedEntity Return count of elements
     */
    public function count()
    {
      return count($this->SharedEntity);
    }

}
