<?php

namespace PMG\BingAds\CustomerManagement;

class ArrayOfKeyValuePairOfstringstring implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var KeyValuePairOfstringstring[] $KeyValuePairOfstringstring
     */
    protected $KeyValuePairOfstringstring = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValuePairOfstringstring[]
     */
    public function getKeyValuePairOfstringstring()
    {
        return $this->KeyValuePairOfstringstring;
    }

    /**
     * @param KeyValuePairOfstringstring[] $KeyValuePairOfstringstring
     * @return \PMG\BingAds\CustomerManagement\ArrayOfKeyValuePairOfstringstring
     */
    public function setKeyValuePairOfstringstring(array $KeyValuePairOfstringstring = null)
    {
        $this->KeyValuePairOfstringstring = $KeyValuePairOfstringstring;
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
      return isset($this->KeyValuePairOfstringstring[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValuePairOfstringstring
     */
    public function offsetGet($offset)
    {
      return $this->KeyValuePairOfstringstring[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValuePairOfstringstring $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValuePairOfstringstring[] = $value;
      } else {
        $this->KeyValuePairOfstringstring[$offset] = $value;
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
      unset($this->KeyValuePairOfstringstring[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return KeyValuePairOfstringstring[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeyValuePairOfstringstring ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeyValuePairOfstringstring Return count of elements
     */
    public function count()
    {
        return is_array($this->KeyValuePairOfstringstring) ? count($this->KeyValuePairOfstringstring) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeyValuePairOfstringstring[]|null The previous array if present
     */
    public function exchangeArray(array $KeyValuePairOfstringstring)
    {
        $prev = $this->KeyValuePairOfstringstring;
        $this->KeyValuePairOfstringstring = $KeyValuePairOfstringstring;
        return $prev;
    }

}
