<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupBidLandscapeInput implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdGroupBidLandscapeInput[] $AdGroupBidLandscapeInput
     */
    protected $AdGroupBidLandscapeInput = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdGroupBidLandscapeInput[]
     */
    public function getAdGroupBidLandscapeInput()
    {
      return $this->AdGroupBidLandscapeInput;
    }

    /**
     * @param AdGroupBidLandscapeInput[] $AdGroupBidLandscapeInput
     * @return \PMG\BingAds\AdInsight\ArrayOfAdGroupBidLandscapeInput
     */
    public function setAdGroupBidLandscapeInput(array $AdGroupBidLandscapeInput = null)
    {
      $this->AdGroupBidLandscapeInput = $AdGroupBidLandscapeInput;
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
      return isset($this->AdGroupBidLandscapeInput[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdGroupBidLandscapeInput
     */
    public function offsetGet($offset)
    {
      return $this->AdGroupBidLandscapeInput[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdGroupBidLandscapeInput $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdGroupBidLandscapeInput[] = $value;
      } else {
        $this->AdGroupBidLandscapeInput[$offset] = $value;
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
      unset($this->AdGroupBidLandscapeInput[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdGroupBidLandscapeInput Return the current element
     */
    public function current()
    {
      return current($this->AdGroupBidLandscapeInput);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdGroupBidLandscapeInput);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdGroupBidLandscapeInput);
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
      reset($this->AdGroupBidLandscapeInput);
    }

    /**
     * Countable implementation
     *
     * @return AdGroupBidLandscapeInput Return count of elements
     */
    public function count()
    {
      return count($this->AdGroupBidLandscapeInput);
    }

}
