<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfProductCondition implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ProductCondition[] $ProductCondition
     */
    protected $ProductCondition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductCondition[]
     */
    public function getProductCondition()
    {
        return $this->ProductCondition;
    }

    /**
     * @param ProductCondition[] $ProductCondition
     * @return \PMG\BingAds\CampaignManagement\ArrayOfProductCondition
     */
    public function setProductCondition(array $ProductCondition = null)
    {
        $this->ProductCondition = $ProductCondition;
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
      return isset($this->ProductCondition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductCondition
     */
    public function offsetGet($offset)
    {
      return $this->ProductCondition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductCondition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductCondition[] = $value;
      } else {
        $this->ProductCondition[$offset] = $value;
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
      unset($this->ProductCondition[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ProductCondition[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProductCondition);
    }

    /**
     * Countable implementation
     *
     * @return ProductCondition Return count of elements
     */
    public function count()
    {
      return count($this->ProductCondition);
    }

    /**
     * Change the current array with another
     *
     * @return ProductCondition[]|null The previous array if present
     */
    public function exchangeArray(array $ProductCondition)
    {
        $prev = $this->ProductCondition;
        $this->ProductCondition = $ProductCondition;
        return $prev;
    }

}
