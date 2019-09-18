<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCampaignSize implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CampaignSize[] $CampaignSize
     */
    protected $CampaignSize = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CampaignSize[]
     */
    public function getCampaignSize()
    {
        return $this->CampaignSize;
    }

    /**
     * @param CampaignSize[] $CampaignSize
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCampaignSize
     */
    public function setCampaignSize(array $CampaignSize = null)
    {
        $this->CampaignSize = $CampaignSize;
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
      return isset($this->CampaignSize[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CampaignSize
     */
    public function offsetGet($offset)
    {
      return $this->CampaignSize[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CampaignSize $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CampaignSize[] = $value;
      } else {
        $this->CampaignSize[$offset] = $value;
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
      unset($this->CampaignSize[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CampaignSize[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CampaignSize ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CampaignSize Return count of elements
     */
    public function count()
    {
        return is_array($this->CampaignSize) ? count($this->CampaignSize) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CampaignSize[]|null The previous array if present
     */
    public function exchangeArray(array $CampaignSize)
    {
        $prev = $this->CampaignSize;
        $this->CampaignSize = $CampaignSize;
        return $prev;
    }

}
