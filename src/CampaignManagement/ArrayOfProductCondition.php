<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfProductCondition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductCondition[] $ProductCondition
     */
    protected $ProductCondition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductCondition[]
     */
    public function getProductCondition()
    {
      return $this->ProductCondition;
    }

    /**
     * @param ProductCondition[] $ProductCondition
     * @return \PMG\BingAds\CampaignManagement\ArrayOfProductCondition
     */
    public function setProductCondition(array $ProductCondition = null)
    {
      $this->ProductCondition = $ProductCondition;
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
      return isset($this->ProductCondition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductCondition
     */
    public function offsetGet($offset)
    {
      return $this->ProductCondition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductCondition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductCondition[] = $value;
      } else {
        $this->ProductCondition[$offset] = $value;
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
      unset($this->ProductCondition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductCondition Return the current element
     */
    public function current()
    {
      return current($this->ProductCondition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductCondition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductCondition);
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
      reset($this->ProductCondition);
    }

    /**
     * Countable implementation
     *
     * @return ProductCondition Return count of elements
     */
    public function count()
    {
      return count($this->ProductCondition);
    }

}
