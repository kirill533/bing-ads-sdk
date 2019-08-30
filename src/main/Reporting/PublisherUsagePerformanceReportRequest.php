<?php

namespace PMG\BingAds\Reporting;

class PublisherUsagePerformanceReportRequest extends ReportRequest
{

    /**
     * @var ReportAggregation $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfPublisherUsagePerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var PublisherUsagePerformanceReportFilter $Filter
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
     * @return \PMG\BingAds\Reporting\PublisherUsagePerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
        $this->Aggregation = $Aggregation;
        return $this;
    }

    /**
     * @return ArrayOfPublisherUsagePerformanceReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfPublisherUsagePerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\PublisherUsagePerformanceReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * @return PublisherUsagePerformanceReportFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param PublisherUsagePerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\PublisherUsagePerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\PublisherUsagePerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\PublisherUsagePerformanceReportRequest
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

}
