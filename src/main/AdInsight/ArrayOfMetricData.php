<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfMetricData implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var MetricData[] $MetricData
     */
    protected $MetricData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MetricData[]
     */
    public function getMetricData()
    {
      return $this->MetricData;
    }

    /**
     * @param MetricData[] $MetricData
     * @return \PMG\BingAds\AdInsight\ArrayOfMetricData
     */
    public function setMetricData(array $MetricData = null)
    {
      $this->MetricData = $MetricData;
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
      return isset($this->MetricData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MetricData
     */
    public function offsetGet($offset)
    {
      return $this->MetricData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MetricData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MetricData[] = $value;
      } else {
        $this->MetricData[$offset] = $value;
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
      unset($this->MetricData[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return MetricData[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->MetricData);
    }

    /**
     * Countable implementation
     *
     * @return MetricData Return count of elements
     */
    public function count()
    {
      return count($this->MetricData);
    }

    /**
     * Change the current array with another
     *
     * @return MetricData[]|null The previous array if present
     */
    public function exchangeArray(array $MetricData)
    {
        $prev = $this->MetricData;
        $this->MetricData = $MetricData;
        return $prev;
    }

}
