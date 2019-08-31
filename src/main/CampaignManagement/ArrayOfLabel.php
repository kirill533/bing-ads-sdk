<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfLabel implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var Label[] $Label
     */
    protected $Label = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Label[]
     */
    public function getLabel()
    {
        return $this->Label;
    }

    /**
     * @param Label[] $Label
     * @return \PMG\BingAds\CampaignManagement\ArrayOfLabel
     */
    public function setLabel(array $Label = null)
    {
        $this->Label = $Label;
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
      return isset($this->Label[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Label
     */
    public function offsetGet($offset)
    {
      return $this->Label[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Label $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Label[] = $value;
      } else {
        $this->Label[$offset] = $value;
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
      unset($this->Label[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return Label[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->Label);
    }

    /**
     * Countable implementation
     *
     * @return Label Return count of elements
     */
    public function count()
    {
      return count($this->Label);
    }

    /**
     * Change the current array with another
     *
     * @return Label[]|null The previous array if present
     */
    public function exchangeArray(array $Label)
    {
        $prev = $this->Label;
        $this->Label = $Label;
        return $prev;
    }

}
