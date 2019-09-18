<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEntityNegativeKeyword implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var EntityNegativeKeyword[] $EntityNegativeKeyword
     */
    protected $EntityNegativeKeyword = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EntityNegativeKeyword[]
     */
    public function getEntityNegativeKeyword()
    {
        return $this->EntityNegativeKeyword;
    }

    /**
     * @param EntityNegativeKeyword[] $EntityNegativeKeyword
     * @return \PMG\BingAds\CampaignManagement\ArrayOfEntityNegativeKeyword
     */
    public function setEntityNegativeKeyword(array $EntityNegativeKeyword = null)
    {
        $this->EntityNegativeKeyword = $EntityNegativeKeyword;
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
      return isset($this->EntityNegativeKeyword[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EntityNegativeKeyword
     */
    public function offsetGet($offset)
    {
      return $this->EntityNegativeKeyword[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EntityNegativeKeyword $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EntityNegativeKeyword[] = $value;
      } else {
        $this->EntityNegativeKeyword[$offset] = $value;
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
      unset($this->EntityNegativeKeyword[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return EntityNegativeKeyword[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->EntityNegativeKeyword ?? []);
    }

    /**
     * Countable implementation
     *
     * @return EntityNegativeKeyword Return count of elements
     */
    public function count()
    {
        return is_array($this->EntityNegativeKeyword) ? count($this->EntityNegativeKeyword) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return EntityNegativeKeyword[]|null The previous array if present
     */
    public function exchangeArray(array $EntityNegativeKeyword)
    {
        $prev = $this->EntityNegativeKeyword;
        $this->EntityNegativeKeyword = $EntityNegativeKeyword;
        return $prev;
    }

}
