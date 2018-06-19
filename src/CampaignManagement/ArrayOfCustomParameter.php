<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCustomParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CustomParameter[] $CustomParameter
     */
    protected $CustomParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomParameter[]
     */
    public function getCustomParameter()
    {
      return $this->CustomParameter;
    }

    /**
     * @param CustomParameter[] $CustomParameter
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCustomParameter
     */
    public function setCustomParameter(array $CustomParameter = null)
    {
      $this->CustomParameter = $CustomParameter;
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
      return isset($this->CustomParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CustomParameter
     */
    public function offsetGet($offset)
    {
      return $this->CustomParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CustomParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CustomParameter[] = $value;
      } else {
        $this->CustomParameter[$offset] = $value;
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
      unset($this->CustomParameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CustomParameter Return the current element
     */
    public function current()
    {
      return current($this->CustomParameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CustomParameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CustomParameter);
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
      reset($this->CustomParameter);
    }

    /**
     * Countable implementation
     *
     * @return CustomParameter Return count of elements
     */
    public function count()
    {
      return count($this->CustomParameter);
    }

}
