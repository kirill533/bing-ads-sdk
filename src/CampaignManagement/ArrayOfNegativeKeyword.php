<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfNegativeKeyword implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var NegativeKeyword[] $NegativeKeyword
     */
    protected $NegativeKeyword = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NegativeKeyword[]
     */
    public function getNegativeKeyword()
    {
      return $this->NegativeKeyword;
    }

    /**
     * @param NegativeKeyword[] $NegativeKeyword
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfNegativeKeyword
     */
    public function setNegativeKeyword(array $NegativeKeyword = null)
    {
      $this->NegativeKeyword = $NegativeKeyword;
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
      return isset($this->NegativeKeyword[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return NegativeKeyword
     */
    public function offsetGet($offset)
    {
      return $this->NegativeKeyword[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param NegativeKeyword $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->NegativeKeyword[] = $value;
      } else {
        $this->NegativeKeyword[$offset] = $value;
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
      unset($this->NegativeKeyword[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return NegativeKeyword Return the current element
     */
    public function current()
    {
      return current($this->NegativeKeyword);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->NegativeKeyword);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->NegativeKeyword);
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
      reset($this->NegativeKeyword);
    }

    /**
     * Countable implementation
     *
     * @return NegativeKeyword Return count of elements
     */
    public function count()
    {
      return count($this->NegativeKeyword);
    }

}
