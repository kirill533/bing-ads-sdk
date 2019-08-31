<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfLanguageCriterion implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var LanguageCriterion[] $LanguageCriterion
     */
    protected $LanguageCriterion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LanguageCriterion[]
     */
    public function getLanguageCriterion()
    {
        return $this->LanguageCriterion;
    }

    /**
     * @param LanguageCriterion[] $LanguageCriterion
     * @return \PMG\BingAds\AdInsight\ArrayOfLanguageCriterion
     */
    public function setLanguageCriterion(array $LanguageCriterion = null)
    {
        $this->LanguageCriterion = $LanguageCriterion;
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
      return isset($this->LanguageCriterion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LanguageCriterion
     */
    public function offsetGet($offset)
    {
      return $this->LanguageCriterion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LanguageCriterion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LanguageCriterion[] = $value;
      } else {
        $this->LanguageCriterion[$offset] = $value;
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
      unset($this->LanguageCriterion[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return LanguageCriterion[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->LanguageCriterion);
    }

    /**
     * Countable implementation
     *
     * @return LanguageCriterion Return count of elements
     */
    public function count()
    {
      return count($this->LanguageCriterion);
    }

    /**
     * Change the current array with another
     *
     * @return LanguageCriterion[]|null The previous array if present
     */
    public function exchangeArray(array $LanguageCriterion)
    {
        $prev = $this->LanguageCriterion;
        $this->LanguageCriterion = $LanguageCriterion;
        return $prev;
    }

}
