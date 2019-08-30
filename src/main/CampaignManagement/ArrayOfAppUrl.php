<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfAppUrl implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * @return \PMG\BingAds\CampaignManagement\ArrayOfAppUrl
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
     * Traversable Implementation
     *
     * @return AppUrl[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AppUrl);
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

    /**
     * Change the current array with another
     *
     * @return AppUrl[]|null The previous array if present
     */
    public function exchangeArray(array $AppUrl)
    {
        $prev = $this->AppUrl;
        $this->AppUrl = $AppUrl;
        return $prev;
    }

}
