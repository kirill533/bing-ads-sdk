<?php

namespace PMG\BingAds\Reporting;

class ArrayOfGoalsAndFunnelsReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GoalsAndFunnelsReportColumn[] $GoalsAndFunnelsReportColumn
     */
    protected $GoalsAndFunnelsReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoalsAndFunnelsReportColumn[]
     */
    public function getGoalsAndFunnelsReportColumn()
    {
      return $this->GoalsAndFunnelsReportColumn;
    }

    /**
     * @param GoalsAndFunnelsReportColumn[] $GoalsAndFunnelsReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfGoalsAndFunnelsReportColumn
     */
    public function setGoalsAndFunnelsReportColumn(array $GoalsAndFunnelsReportColumn = null)
    {
      $this->GoalsAndFunnelsReportColumn = $GoalsAndFunnelsReportColumn;
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
      return isset($this->GoalsAndFunnelsReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GoalsAndFunnelsReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->GoalsAndFunnelsReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GoalsAndFunnelsReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GoalsAndFunnelsReportColumn[] = $value;
      } else {
        $this->GoalsAndFunnelsReportColumn[$offset] = $value;
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
      unset($this->GoalsAndFunnelsReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GoalsAndFunnelsReportColumn Return the current element
     */
    public function current()
    {
      return current($this->GoalsAndFunnelsReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GoalsAndFunnelsReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GoalsAndFunnelsReportColumn);
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
      reset($this->GoalsAndFunnelsReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return GoalsAndFunnelsReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->GoalsAndFunnelsReportColumn);
    }

}
