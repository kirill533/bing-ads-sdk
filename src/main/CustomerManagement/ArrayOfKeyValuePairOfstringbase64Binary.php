<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfKeyValuePairOfstringbase64Binary implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeyValuePairOfstringbase64Binary[] $KeyValuePairOfstringbase64Binary
     */
    protected $KeyValuePairOfstringbase64Binary = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValuePairOfstringbase64Binary[]
     */
    public function getKeyValuePairOfstringbase64Binary()
    {
        return $this->KeyValuePairOfstringbase64Binary;
    }

    /**
     * @param KeyValuePairOfstringbase64Binary[] $KeyValuePairOfstringbase64Binary
     * @return \PMG\BingAds\CustomerManagement\ArrayOfKeyValuePairOfstringbase64Binary
     */
    public function setKeyValuePairOfstringbase64Binary(array $KeyValuePairOfstringbase64Binary = null)
    {
        $this->KeyValuePairOfstringbase64Binary = $KeyValuePairOfstringbase64Binary;
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
      return isset($this->KeyValuePairOfstringbase64Binary[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValuePairOfstringbase64Binary
     */
    public function offsetGet($offset)
    {
      return $this->KeyValuePairOfstringbase64Binary[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValuePairOfstringbase64Binary $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValuePairOfstringbase64Binary[] = $value;
      } else {
        $this->KeyValuePairOfstringbase64Binary[$offset] = $value;
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
      unset($this->KeyValuePairOfstringbase64Binary[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeyValuePairOfstringbase64Binary[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeyValuePairOfstringbase64Binary ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeyValuePairOfstringbase64Binary Return count of elements
     */
    public function count()
    {
        return is_array($this->KeyValuePairOfstringbase64Binary) ? count($this->KeyValuePairOfstringbase64Binary) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeyValuePairOfstringbase64Binary[]|null The previous array if present
     */
    public function exchangeArray(array $KeyValuePairOfstringbase64Binary)
    {
        $prev = $this->KeyValuePairOfstringbase64Binary;
        $this->KeyValuePairOfstringbase64Binary = $KeyValuePairOfstringbase64Binary;
        return $prev;
    }

}
