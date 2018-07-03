<?php

namespace PMG\BingAds\Reporting;

class KeywordPerformanceReportRequest extends ReportRequest
{

    /**
     * @see \PMG\BingAds\Reporting\ReportAggregation for valid values
     *
     * @var string $Aggregation
     */
    protected $Aggregation = null;

    /**
     * @var ArrayOfKeywordPerformanceReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var KeywordPerformanceReportFilter $Filter
     */
    protected $Filter = null;

    /**
     * @var int $MaxRows
     */
    protected $MaxRows = null;

    /**
     * @var AccountThroughAdGroupReportScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ArrayOfKeywordPerformanceReportSort $Sort
     */
    protected $Sort = null;

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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setAggregation($Aggregation)
    {
      $this->Aggregation = $Aggregation;
      return $this;
    }

    /**
     * @return ArrayOfKeywordPerformanceReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfKeywordPerformanceReportColumn $Columns
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return KeywordPerformanceReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param KeywordPerformanceReportFilter $Filter
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setFilter($Filter)
    {
      $this->Filter = $Filter;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRows()
    {
      return $this->MaxRows;
    }

    /**
     * @param int $MaxRows
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setMaxRows($MaxRows)
    {
      $this->MaxRows = $MaxRows;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ArrayOfKeywordPerformanceReportSort
     */
    public function getSort()
    {
      return $this->Sort;
    }

    /**
     * @param ArrayOfKeywordPerformanceReportSort $Sort
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setSort($Sort)
    {
      $this->Sort = $Sort;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportRequest
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
