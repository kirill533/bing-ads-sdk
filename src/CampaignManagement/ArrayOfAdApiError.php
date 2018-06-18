<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfAdApiError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdApiError[] $AdApiError
     */
    protected $AdApiError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdApiError[]
     */
    public function getAdApiError()
    {
      return $this->AdApiError;
    }

    /**
     * @param AdApiError[] $AdApiError
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfAdApiError
     */
    public function setAdApiError(array $AdApiError = null)
    {
      $this->AdApiError = $AdApiError;
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
      return isset($this->AdApiError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdApiError
     */
    public function offsetGet($offset)
    {
      return $this->AdApiError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdApiError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdApiError[] = $value;
      } else {
        $this->AdApiError[$offset] = $value;
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
      unset($this->AdApiError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdApiError Return the current element
     */
    public function current()
    {
      return current($this->AdApiError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdApiError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdApiError);
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
      reset($this->AdApiError);
    }

    /**
     * Countable implementation
     *
     * @return AdApiError Return count of elements
     */
    public function count()
    {
      return count($this->AdApiError);
    }

}
