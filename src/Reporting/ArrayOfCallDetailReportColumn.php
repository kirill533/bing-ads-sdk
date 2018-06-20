<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCallDetailReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CallDetailReportColumn[] $CallDetailReportColumn
     */
    protected $CallDetailReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CallDetailReportColumn[]
     */
    public function getCallDetailReportColumn()
    {
      return $this->CallDetailReportColumn;
    }

    /**
     * @param CallDetailReportColumn[] $CallDetailReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfCallDetailReportColumn
     */
    public function setCallDetailReportColumn(array $CallDetailReportColumn = null)
    {
      $this->CallDetailReportColumn = $CallDetailReportColumn;
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
      return isset($this->CallDetailReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CallDetailReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->CallDetailReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CallDetailReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CallDetailReportColumn[] = $value;
      } else {
        $this->CallDetailReportColumn[$offset] = $value;
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
      unset($this->CallDetailReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CallDetailReportColumn Return the current element
     */
    public function current()
    {
      return current($this->CallDetailReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CallDetailReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CallDetailReportColumn);
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
      reset($this->CallDetailReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return CallDetailReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->CallDetailReportColumn);
    }

}
