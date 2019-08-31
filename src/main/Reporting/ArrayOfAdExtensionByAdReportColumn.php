<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAdExtensionByAdReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return AdExtensionByAdReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AdExtensionByAdReportColumn);
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

    /**
     * Change the current array with another
     *
     * @return AdExtensionByAdReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AdExtensionByAdReportColumn)
    {
        $prev = $this->AdExtensionByAdReportColumn;
        $this->AdExtensionByAdReportColumn = $AdExtensionByAdReportColumn;
        return $prev;
    }

}
