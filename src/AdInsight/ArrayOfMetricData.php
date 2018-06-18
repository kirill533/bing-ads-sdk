<?php

namespace PMG\BingAds\AdInsight;

class ArrayOfMetricData implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return MetricData Return the current element
     */
    public function current()
    {
      return current($this->MetricData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MetricData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MetricData);
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
      reset($this->MetricData);
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

}
