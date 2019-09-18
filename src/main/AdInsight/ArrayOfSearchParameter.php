<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfSearchParameter implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var SearchParameter[] $SearchParameter
     */
    protected $SearchParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchParameter[]
     */
    public function getSearchParameter()
    {
        return $this->SearchParameter;
    }

    /**
     * @param SearchParameter[] $SearchParameter
     * @return \PMG\BingAds\AdInsight\ArrayOfSearchParameter
     */
    public function setSearchParameter(array $SearchParameter = null)
    {
        $this->SearchParameter = $SearchParameter;
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
      return isset($this->SearchParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SearchParameter
     */
    public function offsetGet($offset)
    {
      return $this->SearchParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SearchParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SearchParameter[] = $value;
      } else {
        $this->SearchParameter[$offset] = $value;
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
      unset($this->SearchParameter[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return SearchParameter[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->SearchParameter ?? []);
    }

    /**
     * Countable implementation
     *
     * @return SearchParameter Return count of elements
     */
    public function count()
    {
        return is_array($this->SearchParameter) ? count($this->SearchParameter) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return SearchParameter[]|null The previous array if present
     */
    public function exchangeArray(array $SearchParameter)
    {
        $prev = $this->SearchParameter;
        $this->SearchParameter = $SearchParameter;
        return $prev;
    }

}
