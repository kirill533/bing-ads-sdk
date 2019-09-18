<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfWebpageCondition implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var WebpageCondition[] $WebpageCondition
     */
    protected $WebpageCondition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebpageCondition[]
     */
    public function getWebpageCondition()
    {
        return $this->WebpageCondition;
    }

    /**
     * @param WebpageCondition[] $WebpageCondition
     * @return \PMG\BingAds\CampaignManagement\ArrayOfWebpageCondition
     */
    public function setWebpageCondition(array $WebpageCondition = null)
    {
        $this->WebpageCondition = $WebpageCondition;
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
      return isset($this->WebpageCondition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebpageCondition
     */
    public function offsetGet($offset)
    {
      return $this->WebpageCondition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebpageCondition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WebpageCondition[] = $value;
      } else {
        $this->WebpageCondition[$offset] = $value;
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
      unset($this->WebpageCondition[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return WebpageCondition[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->WebpageCondition ?? []);
    }

    /**
     * Countable implementation
     *
     * @return WebpageCondition Return count of elements
     */
    public function count()
    {
        return is_array($this->WebpageCondition) ? count($this->WebpageCondition) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return WebpageCondition[]|null The previous array if present
     */
    public function exchangeArray(array $WebpageCondition)
    {
        $prev = $this->WebpageCondition;
        $this->WebpageCondition = $WebpageCondition;
        return $prev;
    }

}
