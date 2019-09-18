<?php

namespace PMG\BingAds\Reporting;

class ArrayOfCallDetailReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return CallDetailReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->CallDetailReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return CallDetailReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->CallDetailReportColumn) ? count($this->CallDetailReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return CallDetailReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $CallDetailReportColumn)
    {
        $prev = $this->CallDetailReportColumn;
        $this->CallDetailReportColumn = $CallDetailReportColumn;
        return $prev;
    }

}
