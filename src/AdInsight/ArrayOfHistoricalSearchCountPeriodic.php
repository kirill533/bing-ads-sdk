<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfHistoricalSearchCountPeriodic implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HistoricalSearchCountPeriodic[] $HistoricalSearchCountPeriodic
     */
    protected $HistoricalSearchCountPeriodic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HistoricalSearchCountPeriodic[]
     */
    public function getHistoricalSearchCountPeriodic()
    {
      return $this->HistoricalSearchCountPeriodic;
    }

    /**
     * @param HistoricalSearchCountPeriodic[] $HistoricalSearchCountPeriodic
     * @return \PMG\BingAds\AdInsight\ArrayOfHistoricalSearchCountPeriodic
     */
    public function setHistoricalSearchCountPeriodic(array $HistoricalSearchCountPeriodic = null)
    {
      $this->HistoricalSearchCountPeriodic = $HistoricalSearchCountPeriodic;
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
      return isset($this->HistoricalSearchCountPeriodic[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HistoricalSearchCountPeriodic
     */
    public function offsetGet($offset)
    {
      return $this->HistoricalSearchCountPeriodic[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HistoricalSearchCountPeriodic $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HistoricalSearchCountPeriodic[] = $value;
      } else {
        $this->HistoricalSearchCountPeriodic[$offset] = $value;
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
      unset($this->HistoricalSearchCountPeriodic[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HistoricalSearchCountPeriodic Return the current element
     */
    public function current()
    {
      return current($this->HistoricalSearchCountPeriodic);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HistoricalSearchCountPeriodic);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HistoricalSearchCountPeriodic);
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
      reset($this->HistoricalSearchCountPeriodic);
    }

    /**
     * Countable implementation
     *
     * @return HistoricalSearchCountPeriodic Return count of elements
     */
    public function count()
    {
      return count($this->HistoricalSearchCountPeriodic);
    }

}
