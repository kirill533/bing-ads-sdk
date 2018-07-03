<?php

namespace PMG\BingAds\Bulk;

class PerformanceStatsDateRange
{

    /**
     * @var Date $CustomDateRangeEnd
     */
    protected $CustomDateRangeEnd = null;

    /**
     * @var Date $CustomDateRangeStart
     */
    protected $CustomDateRangeStart = null;

    /**
     * @see \PMG\BingAds\Bulk\ReportTimePeriod for valid values
     *
     * @var string $PredefinedTime
     */
    protected $PredefinedTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Date
     */
    public function getCustomDateRangeEnd()
    {
      return $this->CustomDateRangeEnd;
    }

    /**
     * @param Date $CustomDateRangeEnd
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setCustomDateRangeEnd($CustomDateRangeEnd)
    {
      $this->CustomDateRangeEnd = $CustomDateRangeEnd;
      return $this;
    }

    /**
     * @return Date
     */
    public function getCustomDateRangeStart()
    {
      return $this->CustomDateRangeStart;
    }

    /**
     * @param Date $CustomDateRangeStart
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setCustomDateRangeStart($CustomDateRangeStart)
    {
      $this->CustomDateRangeStart = $CustomDateRangeStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getPredefinedTime()
    {
      return $this->PredefinedTime;
    }

    /**
     * @param string $PredefinedTime
     * @return \PMG\BingAds\Bulk\PerformanceStatsDateRange
     */
    public function setPredefinedTime($PredefinedTime)
    {
      $this->PredefinedTime = $PredefinedTime;
      return $this;
    }

}
