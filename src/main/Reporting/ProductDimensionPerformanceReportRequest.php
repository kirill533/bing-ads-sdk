<?php

namespace PMG\BingAds\Reporting;

class ProductDimensionPerformanceReportRequest extends ReportRequest
{

    /**
     * @var ReportAggregation $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfProductDimensionPerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var ProductDimensionPerformanceReportFilter $Filter
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
      $this->Aggregation = $Aggregation;
      return $this;
    }

    /**
     * @return ArrayOfProductDimensionPerformanceReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfProductDimensionPerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return ProductDimensionPerformanceReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param ProductDimensionPerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportRequest
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
     * @return \PMG\BingAds\Reporting\ProductDimensionPerformanceReportRequest
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
