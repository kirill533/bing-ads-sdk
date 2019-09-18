<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAgeGenderAudienceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AgeGenderAudienceReportColumn[] $AgeGenderAudienceReportColumn
     */
    protected $AgeGenderAudienceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AgeGenderAudienceReportColumn[]
     */
    public function getAgeGenderAudienceReportColumn()
    {
        return $this->AgeGenderAudienceReportColumn;
    }

    /**
     * @param AgeGenderAudienceReportColumn[] $AgeGenderAudienceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAgeGenderAudienceReportColumn
     */
    public function setAgeGenderAudienceReportColumn(array $AgeGenderAudienceReportColumn = null)
    {
        $this->AgeGenderAudienceReportColumn = $AgeGenderAudienceReportColumn;
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
      return isset($this->AgeGenderAudienceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AgeGenderAudienceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AgeGenderAudienceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AgeGenderAudienceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AgeGenderAudienceReportColumn[] = $value;
      } else {
        $this->AgeGenderAudienceReportColumn[$offset] = $value;
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
      unset($this->AgeGenderAudienceReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AgeGenderAudienceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AgeGenderAudienceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return AgeGenderAudienceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->AgeGenderAudienceReportColumn) ? count($this->AgeGenderAudienceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return AgeGenderAudienceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AgeGenderAudienceReportColumn)
    {
        $prev = $this->AgeGenderAudienceReportColumn;
        $this->AgeGenderAudienceReportColumn = $AgeGenderAudienceReportColumn;
        return $prev;
    }

}
