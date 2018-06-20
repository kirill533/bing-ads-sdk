<?php

namespace PMG\BingAds\Reporting;

class ArrayOfShareOfVoiceReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return ShareOfVoiceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ShareOfVoiceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShareOfVoiceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShareOfVoiceReportColumn);
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
      reset($this->ShareOfVoiceReportColumn);
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

}
