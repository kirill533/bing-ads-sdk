<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfKeyword implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Keyword[] $Keyword
     */
    protected $Keyword = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Keyword[]
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword[] $Keyword
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfKeyword
     */
    public function setKeyword(array $Keyword = null)
    {
      $this->Keyword = $Keyword;
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
      return isset($this->Keyword[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Keyword
     */
    public function offsetGet($offset)
    {
      return $this->Keyword[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Keyword $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Keyword[] = $value;
      } else {
        $this->Keyword[$offset] = $value;
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
      unset($this->Keyword[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Keyword Return the current element
     */
    public function current()
    {
      return current($this->Keyword);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Keyword);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Keyword);
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
      reset($this->Keyword);
    }

    /**
     * Countable implementation
     *
     * @return Keyword Return count of elements
     */
    public function count()
    {
      return count($this->Keyword);
    }

}
