<?php

namespace PMG\BingAds\Reporting;

class ArrayOfProfessionalDemographicsAudienceReportColumn implements \ArrayAccess, \IteratorAggregate, \Countable
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
     * Traversable Implementation
     *
     * @return ProfessionalDemographicsAudienceReportColumn[] Return an iterator of the elements
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->ProfessionalDemographicsAudienceReportColumn ?? []);
    }

    /**
     * Countable implementation
     *
     * @return ProfessionalDemographicsAudienceReportColumn Return count of elements
     */
    public function count()
    {
        return is_array($this->ProfessionalDemographicsAudienceReportColumn) ? count($this->ProfessionalDemographicsAudienceReportColumn) : 0;
    }

    /**
     * Change the current array with another
     *
     * @return ProfessionalDemographicsAudienceReportColumn[]|null The previous array if present
     */
    public function exchangeArray(array $ProfessionalDemographicsAudienceReportColumn)
    {
        $prev = $this->ProfessionalDemographicsAudienceReportColumn;
        $this->ProfessionalDemographicsAudienceReportColumn = $ProfessionalDemographicsAudienceReportColumn;
        return $prev;
    }

}
