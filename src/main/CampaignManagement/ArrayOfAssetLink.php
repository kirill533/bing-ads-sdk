<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAssetLink implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AssetLink[] $AssetLink
     */
    protected $AssetLink = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssetLink[]
     */
    public function getAssetLink()
    {
        return $this->AssetLink;
    }

    /**
     * @param AssetLink[] $AssetLink
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAssetLink
     */
    public function setAssetLink(array $AssetLink = null)
    {
        $this->AssetLink = $AssetLink;
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
      return isset($this->AssetLink[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssetLink
     */
    public function offsetGet($offset)
    {
      return $this->AssetLink[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssetLink $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AssetLink[] = $value;
      } else {
        $this->AssetLink[$offset] = $value;
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
      unset($this->AssetLink[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AssetLink[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AssetLink);
    }

    /**
     * Countable implementation
     *
     * @return AssetLink Return count of elements
     */
    public function count()
    {
      return count($this->AssetLink);
    }

    /**
     * Change the current array with another
     *
     * @return AssetLink[]|null The previous array if present
     */
    public function exchangeArray(array $AssetLink)
    {
        $prev = $this->AssetLink;
        $this->AssetLink = $AssetLink;
        return $prev;
    }

}
