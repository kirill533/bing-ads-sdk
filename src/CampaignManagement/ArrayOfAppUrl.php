<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAppUrl implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AppUrl[] $AppUrl
     */
    protected $AppUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AppUrl[]
     */
    public function getAppUrl()
    {
      return $this->AppUrl;
    }

    /**
     * @param AppUrl[] $AppUrl
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAppUrl
     */
    public function setAppUrl(array $AppUrl = null)
    {
      $this->AppUrl = $AppUrl;
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
      return isset($this->AppUrl[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AppUrl
     */
    public function offsetGet($offset)
    {
      return $this->AppUrl[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AppUrl $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AppUrl[] = $value;
      } else {
        $this->AppUrl[$offset] = $value;
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
      unset($this->AppUrl[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AppUrl Return the current element
     */
    public function current()
    {
      return current($this->AppUrl);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AppUrl);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AppUrl);
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
      reset($this->AppUrl);
    }

    /**
     * Countable implementation
     *
     * @return AppUrl Return count of elements
     */
    public function count()
    {
      return count($this->AppUrl);
    }

}
