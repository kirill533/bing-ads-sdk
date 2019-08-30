<?php

namespace PMG\BingAds\Reporting;

class ArrayOfShareOfVoiceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var ShareOfVoiceReportColumn[] $ShareOfVoiceReportColumn
     */
    protected $ShareOfVoiceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShareOfVoiceReportColumn[]
     */
    public function getShareOfVoiceReportColumn()
    {
        return $this->ShareOfVoiceReportColumn;
    }

    /**
     * @param ShareOfVoiceReportColumn[] $ShareOfVoiceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfShareOfVoiceReportColumn
     */
    public function setShareOfVoiceReportColumn(array $ShareOfVoiceReportColumn = null)
    {
        $this->ShareOfVoiceReportColumn = $ShareOfVoiceReportColumn;
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
      return isset($this->ShareOfVoiceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShareOfVoiceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ShareOfVoiceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShareOfVoiceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ShareOfVoiceReportColumn[] = $value;
      } else {
        $this->ShareOfVoiceReportColumn[$offset] = $value;
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
      unset($this->ShareOfVoiceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return ShareOfVoiceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ShareOfVoiceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ShareOfVoiceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ShareOfVoiceReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return ShareOfVoiceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ShareOfVoiceReportColumn)
    {
        $prev = $this->ShareOfVoiceReportColumn;
        $this->ShareOfVoiceReportColumn = $ShareOfVoiceReportColumn;
        return $prev;
    }

}
