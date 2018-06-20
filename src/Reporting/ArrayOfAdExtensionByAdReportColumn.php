<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionByAdReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionByAdReportColumn[] $AdExtensionByAdReportColumn
     */
    protected $AdExtensionByAdReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionByAdReportColumn[]
     */
    public function getAdExtensionByAdReportColumn()
    {
      return $this->AdExtensionByAdReportColumn;
    }

    /**
     * @param AdExtensionByAdReportColumn[] $AdExtensionByAdReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdExtensionByAdReportColumn
     */
    public function setAdExtensionByAdReportColumn(array $AdExtensionByAdReportColumn = null)
    {
      $this->AdExtensionByAdReportColumn = $AdExtensionByAdReportColumn;
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
      return isset($this->AdExtensionByAdReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionByAdReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionByAdReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionByAdReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionByAdReportColumn[] = $value;
      } else {
        $this->AdExtensionByAdReportColumn[$offset] = $value;
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
      unset($this->AdExtensionByAdReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionByAdReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionByAdReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionByAdReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionByAdReportColumn);
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
      reset($this->AdExtensionByAdReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionByAdReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionByAdReportColumn);
    }

}
