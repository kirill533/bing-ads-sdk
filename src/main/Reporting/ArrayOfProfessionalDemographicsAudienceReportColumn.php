<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProfessionalDemographicsAudienceReportColumn implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProfessionalDemographicsAudienceReportColumn[] $ProfessionalDemographicsAudienceReportColumn
     */
    protected $ProfessionalDemographicsAudienceReportColumn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProfessionalDemographicsAudienceReportColumn[]
     */
    public function getProfessionalDemographicsAudienceReportColumn()
    {
      return $this->ProfessionalDemographicsAudienceReportColumn;
    }

    /**
     * @param ProfessionalDemographicsAudienceReportColumn[] $ProfessionalDemographicsAudienceReportColumn
     * @return \PMG\BingAds\Reporting\ArrayOfProfessionalDemographicsAudienceReportColumn
     */
    public function setProfessionalDemographicsAudienceReportColumn(array $ProfessionalDemographicsAudienceReportColumn = null)
    {
      $this->ProfessionalDemographicsAudienceReportColumn = $ProfessionalDemographicsAudienceReportColumn;
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
      return isset($this->ProfessionalDemographicsAudienceReportColumn[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProfessionalDemographicsAudienceReportColumn
     */
    public function offsetGet($offset)
    {
      return $this->ProfessionalDemographicsAudienceReportColumn[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProfessionalDemographicsAudienceReportColumn $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProfessionalDemographicsAudienceReportColumn[] = $value;
      } else {
        $this->ProfessionalDemographicsAudienceReportColumn[$offset] = $value;
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
      unset($this->ProfessionalDemographicsAudienceReportColumn[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProfessionalDemographicsAudienceReportColumn Return the current element
     */
    public function current()
    {
      return current($this->ProfessionalDemographicsAudienceReportColumn);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProfessionalDemographicsAudienceReportColumn);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProfessionalDemographicsAudienceReportColumn);
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
      reset($this->ProfessionalDemographicsAudienceReportColumn);
    }

    /**
     * Countable implementation
     *
     * @return ProfessionalDemographicsAudienceReportColumn Return count of elements
     */
    public function count()
    {
      return count($this->ProfessionalDemographicsAudienceReportColumn);
    }

}
