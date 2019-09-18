<?php

namespace PMG\BingAds\Reporting;

class BudgetSummaryReportRequest extends ReportRequest
{

    /**
     * @var ArrayOfBudgetSummaryReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var AccountThroughCampaignReportScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ReportTime $Time
     */
    protected $Time = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfBudgetSummaryReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfBudgetSummaryReportColumn $Columns
     * @return \PMG\BingAds\Reporting\BudgetSummaryReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
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
     * @return \PMG\BingAds\Reporting\BudgetSummaryReportRequest
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
     * @return \PMG\BingAds\Reporting\BudgetSummaryReportRequest
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

}
