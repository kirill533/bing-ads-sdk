<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSharedEntity implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfSharedEntity
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
     * Traversable Implementation
     *
     * @return SharedEntity[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SharedEntity);
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

    /**
     * Change the current array with another
     *
     * @return SharedEntity[]|null The previous array if present
     */
    public function exchangeArray(array $SharedEntity)
    {
        $prev = $this->SharedEntity;
        $this->SharedEntity = $SharedEntity;
        return $prev;
    }

}
