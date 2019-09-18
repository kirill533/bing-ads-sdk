<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfKeyValueOfstringstring implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return KeyValueOfstringstring[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->KeyValueOfstringstring ?? []);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfstringstring Return count of elements
     */
    public function count()
    {
        return is_array($this->KeyValueOfstringstring) ? count($this->KeyValueOfstringstring) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return KeyValueOfstringstring[]|null The previous array if present
     */
    public function exchangeArray(array $KeyValueOfstringstring)
    {
        $prev = $this->KeyValueOfstringstring;
        $this->KeyValueOfstringstring = $KeyValueOfstringstring;
        return $prev;
    }

}
