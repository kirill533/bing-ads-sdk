<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCustomParameter implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CustomParameter[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CustomParameter);
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

    /**
     * Change the current array with another
     *
     * @return CustomParameter[]|null The previous array if present
     */
    public function exchangeArray(array $CustomParameter)
    {
        $prev = $this->CustomParameter;
        $this->CustomParameter = $CustomParameter;
        return $prev;
    }

}
