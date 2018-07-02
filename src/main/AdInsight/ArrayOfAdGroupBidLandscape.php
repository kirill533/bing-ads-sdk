<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupBidLandscape implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupBidLandscape[] $AdGroupBidLandscape
     */
    protected $AdGroupBidLandscape = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupBidLandscape[]
     */
    public function getAdGroupBidLandscape()
    {
      return $this->AdGroupBidLandscape;
    }

    /**
     * @param AdGroupBidLandscape[] $AdGroupBidLandscape
     * @return \PMG\BingAds\AdInsight\ArrayOfAdGroupBidLandscape
     */
    public function setAdGroupBidLandscape(array $AdGroupBidLandscape = null)
    {
      $this->AdGroupBidLandscape = $AdGroupBidLandscape;
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
      return isset($this->AdGroupBidLandscape[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupBidLandscape
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupBidLandscape[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupBidLandscape $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupBidLandscape[] = $value;
      } else {
        $this->AdGroupBidLandscape[$offset] = $value;
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
      unset($this->AdGroupBidLandscape[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupBidLandscape Return the current element
     */
    public function current()
    {
      return current($this->AdGroupBidLandscape);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupBidLandscape);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupBidLandscape);
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
      reset($this->AdGroupBidLandscape);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupBidLandscape Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupBidLandscape);
    }

}
