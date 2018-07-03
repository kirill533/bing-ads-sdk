<?php

namespace PMG\BingAds\Reporting;

class CampaignPerformanceReportRequest extends ReportRequest
{

    /**
     * @see \PMG\BingAds\Reporting\ReportAggregation for valid values
     *
     * @var string $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfCampaignPerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var CampaignPerformanceReportFilter $Filter
     */
    protected $Filter = null;

    /**
     * @var AccountThroughCampaignReportScope $Scope
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
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
      $this->Aggregation = $Aggregation;
      return $this;
    }

    /**
     * @return ArrayOfCampaignPerformanceReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfCampaignPerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return CampaignPerformanceReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param CampaignPerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportRequest
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return AccountThroughCampaignReportScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param AccountThroughCampaignReportScope $Scope
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\CampaignPerformanceReportRequest
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
