<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfHistoricalSearchCountPeriodic implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return HistoricalSearchCountPeriodic[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->HistoricalSearchCountPeriodic);
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

    /**
     * Change the current array with another
     *
     * @return HistoricalSearchCountPeriodic[]|null The previous array if present
     */
    public function exchangeArray(array $HistoricalSearchCountPeriodic)
    {
        $prev = $this->HistoricalSearchCountPeriodic;
        $this->HistoricalSearchCountPeriodic = $HistoricalSearchCountPeriodic;
        return $prev;
    }

}
