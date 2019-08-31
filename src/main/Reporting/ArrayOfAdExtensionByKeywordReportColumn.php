<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionByKeywordReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtensionByKeywordReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionByKeywordReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return AdExtensionByKeywordReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionByKeywordReportColumn)
    {
        $prev = $this->AdExtensionByKeywordReportColumn;
        $this->AdExtensionByKeywordReportColumn = $AdExtensionByKeywordReportColumn;
        return $prev;
    }

}
