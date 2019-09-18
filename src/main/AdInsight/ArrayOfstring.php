<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfstring implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string[] $string
     * @return \PMG\BingAds\AdInsight\ArrayOfstring
     */
    public function setString(array $string = null)
    {
        $this->string = $string;
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
      return isset($this->string[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return string
     */
    public function offsetGet($offset)
    {
      return $this->string[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param string $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->string[] = $value;
      } else {
        $this->string[$offset] = $value;
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
      unset($this->string[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return string[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->string ?? []);
    }

    /**
     * Countable implementation
     *
     * @return string Return count of elements
     */
    public function count()
    {
        return is_array($this->string) ? count($this->string) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return string[]|null The previous array if present
     */
    public function exchangeArray(array $string)
    {
        $prev = $this->string;
        $this->string = $string;
        return $prev;
    }

}
