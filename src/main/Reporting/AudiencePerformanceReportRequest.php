<?php

namespace PMG\BingAds\Reporting;

class AudiencePerformanceReportRequest extends ReportRequest
{

    /**
     * @var ReportAggregation $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfAudiencePerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var AudiencePerformanceReportFilter $Filter
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
     * @return \PMG\BingAds\Reporting\AudiencePerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
        $this->Aggregation = $Aggregation;
        return $this;
    }

    /**
     * @return ArrayOfAudiencePerformanceReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfAudiencePerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\AudiencePerformanceReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * @return AudiencePerformanceReportFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param AudiencePerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\AudiencePerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\AudiencePerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\AudiencePerformanceReportRequest
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

}
