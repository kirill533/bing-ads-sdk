<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfEntityNegativeKeyword implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return EntityNegativeKeyword Return the current element
     */
    public function current()
    {
      return current($this->EntityNegativeKeyword);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EntityNegativeKeyword);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EntityNegativeKeyword);
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
      reset($this->EntityNegativeKeyword);
    }

    /**
     * Countable implementation
     *
     * @return EntityNegativeKeyword Return count of elements
     */
    public function count()
    {
      return count($this->EntityNegativeKeyword);
    }

}
