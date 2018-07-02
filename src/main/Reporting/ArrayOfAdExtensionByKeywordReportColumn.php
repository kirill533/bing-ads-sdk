<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionByKeywordReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdExtensionByKeywordReportColumn[] $AdExtensionByKeywordReportColumn
     */
    protected $AdExtensionByKeywordReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdExtensionByKeywordReportColumn[]
     */
    public function getAdExtensionByKeywordReportColumn()
    {
      return $this->AdExtensionByKeywordReportColumn;
    }

    /**
     * @param AdExtensionByKeywordReportColumn[] $AdExtensionByKeywordReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAdExtensionByKeywordReportColumn
     */
    public function setAdExtensionByKeywordReportColumn(array $AdExtensionByKeywordReportColumn = null)
    {
      $this->AdExtensionByKeywordReportColumn = $AdExtensionByKeywordReportColumn;
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
      return isset($this->AdExtensionByKeywordReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdExtensionByKeywordReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AdExtensionByKeywordReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdExtensionByKeywordReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdExtensionByKeywordReportColumn[] = $value;
      } else {
        $this->AdExtensionByKeywordReportColumn[$offset] = $value;
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
      unset($this->AdExtensionByKeywordReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdExtensionByKeywordReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AdExtensionByKeywordReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdExtensionByKeywordReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdExtensionByKeywordReportColumn);
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
      reset($this->AdExtensionByKeywordReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AdExtensionByKeywordReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AdExtensionByKeywordReportColumn);
    }

}
