<?php

namespace PMG\BingAds\CampaignManagement;

class ArrayOfCombinationRule implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var CombinationRule[] $CombinationRule
     */
    protected $CombinationRule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CombinationRule[]
     */
    public function getCombinationRule()
    {
        return $this->CombinationRule;
    }

    /**
     * @param CombinationRule[] $CombinationRule
     * @return \PMG\BingAds\CampaignManagement\ArrayOfCombinationRule
     */
    public function setCombinationRule(array $CombinationRule = null)
    {
        $this->CombinationRule = $CombinationRule;
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
      return isset($this->CombinationRule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CombinationRule
     */
    public function offsetGet($offset)
    {
      return $this->CombinationRule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CombinationRule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CombinationRule[] = $value;
      } else {
        $this->CombinationRule[$offset] = $value;
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
      unset($this->CombinationRule[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return CombinationRule[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CombinationRule ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CombinationRule Return count of elements
     */
    public function count()
    {
        return is_array($this->CombinationRule) ? count($this->CombinationRule) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CombinationRule[]|null The previous array if present
     */
    public function exchangeArray(array $CombinationRule)
    {
        $prev = $this->CombinationRule;
        $this->CombinationRule = $CombinationRule;
        return $prev;
    }

}
