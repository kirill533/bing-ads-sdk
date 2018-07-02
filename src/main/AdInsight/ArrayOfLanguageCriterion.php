<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfLanguageCriterion implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return LanguageCriterion Return the current element
     */
    public function current()
    {
      return current($this->LanguageCriterion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LanguageCriterion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LanguageCriterion);
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
      reset($this->LanguageCriterion);
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

}
