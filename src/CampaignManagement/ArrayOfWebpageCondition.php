<?php

namespace PMG\BingAds\CampaignMangagement;

class ArrayOfWebpageCondition implements \ArrayAccess, \Iterator, \Countable
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
     * @return \PMG\BingAds\CampaignMangagement\ArrayOfWebpageCondition
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
     * Iterator implementation
     *
     * @return WebpageCondition Return the current element
     */
    public function current()
    {
      return current($this->WebpageCondition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebpageCondition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebpageCondition);
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
      reset($this->WebpageCondition);
    }

    /**
     * Countable implementation
     *
     * @return WebpageCondition Return count of elements
     */
    public function count()
    {
      return count($this->WebpageCondition);
    }

}
