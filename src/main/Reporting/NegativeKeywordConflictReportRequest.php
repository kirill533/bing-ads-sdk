<?php

namespace PMG\BingAds\Reporting;

class NegativeKeywordConflictReportRequest extends ReportRequest
{

    /**
     * @var ArrayOfNegativeKeywordConflictReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var NegativeKeywordConflictReportFilter $Filter
     */
    protected $Filter = null;

    /**
     * @var AccountThroughAdGroupReportScope $Scope
     */
    protected $Scope = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfNegativeKeywordConflictReportColumn
     */
    public function getColumns()
    {
      return $this->Columns;
    }

    /**
     * @param ArrayOfNegativeKeywordConflictReportColumn $Columns
     * @return \PMG\BingAds\Reporting\NegativeKeywordConflictReportRequest
     */
    public function setColumns($Columns)
    {
      $this->Columns = $Columns;
      return $this;
    }

    /**
     * @return NegativeKeywordConflictReportFilter
     */
    public function getFilter()
    {
      return $this->Filter;
    }

    /**
     * @param NegativeKeywordConflictReportFilter $Filter
     * @return \PMG\BingAds\Reporting\NegativeKeywordConflictReportRequest
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
     * @return \PMG\BingAds\Reporting\NegativeKeywordConflictReportRequest
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

}
