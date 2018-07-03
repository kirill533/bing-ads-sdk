<?php

namespace PMG\BingAds\Reporting;

class ProfessionalDemographicsAudienceReportRequest extends ReportRequest
{

    /**
     * @see \PMG\BingAds\Reporting\ReportAggregation for valid values
     *
     * @var string $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfProfessionalDemographicsAudienceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var ProfessionalDemographicsAudienceReportFilter $Filter
     */
    protected $Filter = null;

    /**
     * @var AccountThroughAdGroupReportScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ReportTime $Time
     */
    protected $Time = null;

    /**
     * @param string $Aggregation
     */
    public function __construct($Aggregation = null)
    {
      parent::__construct();
      $this->Aggregation = $Aggregation;
    }

    /**
     * @return string
     */
    public function getAggregation()
    {
      return $this->Aggregation;
    }

    /**
     * @param string $Aggregation
     * @return \PMG\BingAds\Reporting\ProfessionalDemographicsAudienceReportRequest
     */
    public function setAggregation($Aggregation)
    {
      $this->Aggregation = $Aggregation;
      return $this;
    }

    /**
     * @return ArrayOfProfessionalDemographicsAudienceReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfProfessionalDemographicsAudienceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\ProfessionalDemographicsAudienceReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return ProfessionalDemographicsAudienceReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param ProfessionalDemographicsAudienceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\ProfessionalDemographicsAudienceReportRequest
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return AccountThroughAdGroupReportScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param AccountThroughAdGroupReportScope $Scope
     * @return \PMG\BingAds\Reporting\ProfessionalDemographicsAudienceReportRequest
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ReportTime
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param ReportTime $Time
     * @return \PMG\BingAds\Reporting\ProfessionalDemographicsAudienceReportRequest
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
