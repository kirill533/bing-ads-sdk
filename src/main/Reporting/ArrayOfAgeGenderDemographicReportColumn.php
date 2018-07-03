<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAgeGenderDemographicReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
{

    /**
     * @var AgeGenderDemographicReportColumn[] $AgeGenderDemographicReportColumn
     */
    protected $AgeGenderDemographicReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AgeGenderDemographicReportColumn[]
     */
    public function getAgeGenderDemographicReportColumn()
    {
      return $this->AgeGenderDemographicReportColumn;
    }

    /**
     * @param AgeGenderDemographicReportColumn[] $AgeGenderDemographicReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfAgeGenderDemographicReportColumn
     */
    public function setAgeGenderDemographicReportColumn(array $AgeGenderDemographicReportColumn = null)
    {
      $this->AgeGenderDemographicReportColumn = $AgeGenderDemographicReportColumn;
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
      return isset($this->AgeGenderDemographicReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AgeGenderDemographicReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->AgeGenderDemographicReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AgeGenderDemographicReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AgeGenderDemographicReportColumn[] = $value;
      } else {
        $this->AgeGenderDemographicReportColumn[$offset] = $value;
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
      unset($this->AgeGenderDemographicReportColumn[$offset]);
    }

    /**
     * Traversable Implementation
     *
     * @return AgeGenderDemographicReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->AgeGenderDemographicReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return AgeGenderDemographicReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->AgeGenderDemographicReportColumn);
    }

    /**
     * Change the current array with another
     *
     * @return AgeGenderDemographicReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $AgeGenderDemographicReportColumn)
    {
        $prev = $this->AgeGenderDemographicReportColumn;
        $this->AgeGenderDemographicReportColumn = $AgeGenderDemographicReportColumn;
        return $prev;
    }

}
