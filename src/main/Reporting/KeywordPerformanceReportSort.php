<?php

namespace PMG\BingAds\Reporting;

class KeywordPerformanceReportSort
{

    /**
     * @see \PMG\BingAds\Reporting\KeywordPerformanceReportColumn for valid values
     *
     * @var string $SortColumn
     */
    protected $SortColumn = null;

    /**
     * @see \PMG\BingAds\Reporting\SortOrder for valid values
     *
     * @var string $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param string $SortColumn
     * @param string $SortOrder
     */
    public function __construct($SortColumn = null, $SortOrder = null)
    {
      $this->SortColumn = $SortColumn;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return string
     */
    public function getSortColumn()
    {
      return $this->SortColumn;
    }

    /**
     * @param string $SortColumn
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportSort
     */
    public function setSortColumn($SortColumn)
    {
      $this->SortColumn = $SortColumn;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param string $SortOrder
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportSort
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
