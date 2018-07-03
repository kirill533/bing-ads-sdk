<?php

namespace PMG\BingAds\Reporting;

class AdPerformanceReportRequest extends ReportRequest
{

    /**
     * @var ReportAggregation $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfAdPerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var AdPerformanceReportFilter $Filter
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
     * @param ReportAggregation $Aggregation
     */
    public function __construct($Aggregation = null)
    {
      parent::__construct();
      $this->Aggregation = $Aggregation;
    }

    /**
     * @return ReportAggregation
     */
    public function getAggregation()
    {
      return $this->Aggregation;
    }

    /**
     * @param ReportAggregation $Aggregation
     * @return \PMG\BingAds\Reporting\AdPerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
      $this->Aggregation = $Aggregation;
      return $this;
    }

    /**
     * @return ArrayOfAdPerformanceReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfAdPerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\AdPerformanceReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return AdPerformanceReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param AdPerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\AdPerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\AdPerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\AdPerformanceReportRequest
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
