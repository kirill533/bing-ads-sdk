<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfKeyword implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfKeyword
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
     * Traversable Implementation
     *
     * @return Keyword[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Keyword ?? []);
    }

    /**
     * Countable implementation
     *
     * @return Keyword Return count of elements
     */
    public function count()
    {
        return is_array($this->Keyword) ? count($this->Keyword) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return Keyword[]|null The previous array if present
     */
    public function exchangeArray(array $Keyword)
    {
        $prev = $this->Keyword;
        $this->Keyword = $Keyword;
        return $prev;
    }

}
