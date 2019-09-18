<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfNegativeKeyword implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfNegativeKeyword
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
     * Traversable Implementation
     *
     * @return NegativeKeyword[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->NegativeKeyword ?? []);
    }

    /**
     * Countable implementation
     *
     * @return NegativeKeyword Return count of elements
     */
    public function count()
    {
        return is_array($this->NegativeKeyword) ? count($this->NegativeKeyword) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return NegativeKeyword[]|null The previous array if present
     */
    public function exchangeArray(array $NegativeKeyword)
    {
        $prev = $this->NegativeKeyword;
        $this->NegativeKeyword = $NegativeKeyword;
        return $prev;
    }

}
