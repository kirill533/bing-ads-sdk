<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupBidLandscapeInput implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdGroupBidLandscapeInput[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupBidLandscapeInput);
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

    /**
     * Change the current array with another
     *
     * @return AdGroupBidLandscapeInput[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupBidLandscapeInput)
    {
        $prev = $this->AdGroupBidLandscapeInput;
        $this->AdGroupBidLandscapeInput = $AdGroupBidLandscapeInput;
        return $prev;
    }

}
