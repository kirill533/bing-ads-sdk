<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionDetailReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtensionDetailReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionDetailReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return AdExtensionDetailReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionDetailReportColumn)
    {
        $prev = $this->AdExtensionDetailReportColumn;
        $this->AdExtensionDetailReportColumn = $AdExtensionDetailReportColumn;
        return $prev;
    }

}
