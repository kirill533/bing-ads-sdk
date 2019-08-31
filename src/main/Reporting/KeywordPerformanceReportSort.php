<?php

namespace PMG\BingAds\Reporting;

class KeywordPerformanceReportSort
{

    /**
     * @var KeywordPerformanceReportColumn $SortColumn
     */
    protected $SortColumn = null;

    /**
     * @var SortOrder $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param KeywordPerformanceReportColumn $SortColumn
     * @param SortOrder $SortOrder
     */
    public function __construct($SortColumn = null, $SortOrder = null)
    {
    $this->SortColumn = $SortColumn;
    $this->SortOrder = $SortOrder;
    }

    /**
     * @return KeywordPerformanceReportColumn
     */
    public function getSortColumn()
    {
        return $this->SortColumn;
    }

    /**
     * @param KeywordPerformanceReportColumn $SortColumn
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportSort
     */
    public function setSortColumn($SortColumn)
    {
        $this->SortColumn = $SortColumn;
        return $this;
    }

    /**
     * @return SortOrder
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }

    /**
     * @param SortOrder $SortOrder
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportSort
     */
    public function setSortOrder($SortOrder)
    {
        $this->SortOrder = $SortOrder;
        return $this;
    }

}
