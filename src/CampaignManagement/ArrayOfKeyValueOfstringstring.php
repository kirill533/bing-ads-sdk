<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfKeyValueOfstringstring implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfstringstring[] $KeyValueOfstringstring
     */
    protected $KeyValueOfstringstring = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfstringstring[]
     */
    public function getKeyValueOfstringstring()
    {
      return $this->KeyValueOfstringstring;
    }

    /**
     * @param KeyValueOfstringstring[] $KeyValueOfstringstring
     * @return \PMG\BingAds\CampaignManagement\ArrayOfKeyValueOfstringstring
     */
    public function setKeyValueOfstringstring(array $KeyValueOfstringstring = null)
    {
      $this->KeyValueOfstringstring = $KeyValueOfstringstring;
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
      return isset($this->KeyValueOfstringstring[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfstringstring
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfstringstring[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfstringstring $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValueOfstringstring[] = $value;
      } else {
        $this->KeyValueOfstringstring[$offset] = $value;
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
      unset($this->KeyValueOfstringstring[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfstringstring Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfstringstring);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfstringstring);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfstringstring);
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
      reset($this->KeyValueOfstringstring);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfstringstring Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfstringstring);
    }

}
