<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfAdGroupBidLandscape implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdGroupBidLandscape[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdGroupBidLandscape);
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

    /**
     * Change the current array with another
     *
     * @return AdGroupBidLandscape[]|null The previous array if present
     */
    public function exchangeArray(array $AdGroupBidLandscape)
    {
        $prev = $this->AdGroupBidLandscape;
        $this->AdGroupBidLandscape = $AdGroupBidLandscape;
        return $prev;
    }

}
