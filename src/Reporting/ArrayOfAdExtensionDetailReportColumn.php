<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionDetailReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionDetailReportColumn[] $AdExtensionDetailReportColumn
     */
    protected $AdExtensionDetailReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionDetailReportColumn[]
     */
    public function getAdExtensionDetailReportColumn()
    {
      return $this->AdExtensionDetailReportColumn;
    }

    /**
     * @param AdExtensionDetailReportColumn[] $AdExtensionDetailReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdExtensionDetailReportColumn
     */
    public function setAdExtensionDetailReportColumn(array $AdExtensionDetailReportColumn = null)
    {
      $this->AdExtensionDetailReportColumn = $AdExtensionDetailReportColumn;
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
      return isset($this->AdExtensionDetailReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionDetailReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionDetailReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionDetailReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionDetailReportColumn[] = $value;
      } else {
        $this->AdExtensionDetailReportColumn[$offset] = $value;
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
      unset($this->AdExtensionDetailReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionDetailReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionDetailReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionDetailReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionDetailReportColumn);
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
      reset($this->AdExtensionDetailReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionDetailReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionDetailReportColumn);
    }

}
