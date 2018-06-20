<?php

namespace PMG\BingAds\Reporting;

class ArrayOfAgeGenderDemographicReportColumn implements \ArrayAccess, \Iterator, \Countable
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
     * Iterator implementation
     *
     * @return AgeGenderDemographicReportColumn Return the current element
     */
    public function current()
    {
      return current($this->AgeGenderDemographicReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AgeGenderDemographicReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AgeGenderDemographicReportColumn);
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
      reset($this->AgeGenderDemographicReportColumn);
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

}
