<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfSetting implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Setting[] $Setting
     */
    protected $Setting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Setting[]
     */
    public function getSetting()
    {
      return $this->Setting;
    }

    /**
     * @param Setting[] $Setting
     * @return \PMG\BingAds\CampaignManagement\ArrayOfSetting
     */
    public function setSetting(array $Setting = null)
    {
      $this->Setting = $Setting;
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
      return isset($this->Setting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Setting
     */
    public function offsetGet($offset)
    {
      return $this->Setting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Setting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Setting[] = $value;
      } else {
        $this->Setting[$offset] = $value;
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
      unset($this->Setting[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Setting[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Setting);
    }

    /**
     * Countable implementation
     *
     * @return Setting Return count of elements
     */
    public function count()
    {
      return count($this->Setting);
    }

    /**
     * Change the current array with another
     *
     * @return Setting[]|null The previous array if present
     */
    public function exchangeArray(array $Setting)
    {
        $prev = $this->Setting;
        $this->Setting = $Setting;
        return $prev;
    }

}
