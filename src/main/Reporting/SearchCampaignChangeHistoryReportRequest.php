<?php

namespace PMG\BingAds\Reporting;

class SearchCampaignChangeHistoryReportRequest extends ReportRequest
{

    /**
     * @var ArrayOfSearchCampaignChangeHistoryReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var SearchCampaignChangeHistoryReportFilter $Filter
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

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return ArrayOfSearchCampaignChangeHistoryReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfSearchCampaignChangeHistoryReportColumn $Columns
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * @return SearchCampaignChangeHistoryReportFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param SearchCampaignChangeHistoryReportFilter $Filter
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportRequest
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
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportRequest
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
     * @return \PMG\BingAds\Reporting\SearchCampaignChangeHistoryReportRequest
     */
    public function setTime($Time)
    {
        $this->Time = $Time;
        return $this;
    }

}
