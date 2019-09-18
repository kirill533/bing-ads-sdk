<?php

namespace PMG\BingAds\Reporting;

class ProductNegativeKeywordConflictReportRequest extends ReportRequest
{

    /**
     * @var ArrayOfProductNegativeKeywordConflictReportColumn $Columns
     */
    protected $Columns = null;

    /**
     * @var ProductNegativeKeywordConflictReportFilter $Filter
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
     * @return ArrayOfProductNegativeKeywordConflictReportColumn
     */
    public function getColumns()
    {
        return $this->Columns;
    }

    /**
     * @param ArrayOfProductNegativeKeywordConflictReportColumn $Columns
     * @return \PMG\BingAds\Reporting\ProductNegativeKeywordConflictReportRequest
     */
    public function setColumns($Columns)
    {
        $this->Columns = $Columns;
        return $this;
    }

    /**
     * @return ProductNegativeKeywordConflictReportFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param ProductNegativeKeywordConflictReportFilter $Filter
     * @return \PMG\BingAds\Reporting\ProductNegativeKeywordConflictReportRequest
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
     * @return \PMG\BingAds\Reporting\ProductNegativeKeywordConflictReportRequest
     */
    public function setScope($Scope)
    {
        $this->Scope = $Scope;
        return $this;
    }

}
