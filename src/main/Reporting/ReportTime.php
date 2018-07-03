<?php

namespace PMG\BingAds\Reporting;

class ReportTime
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
     * @see \PMG\BingAds\Reporting\ReportTimePeriod for valid values
     *
     * @var string $PredefinedTime
     */
    protected $PredefinedTime = null;

    /**
     * @see \PMG\BingAds\Reporting\ReportTimeZone for valid values
     *
     * @var string $ReportTimeZone
     */
    protected $ReportTimeZone = null;

    
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
     * @return \PMG\BingAds\Reporting\ReportTime
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
     * @return \PMG\BingAds\Reporting\ReportTime
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
     * @return \PMG\BingAds\Reporting\ReportTime
     */
    public function setPredefinedTime($PredefinedTime)
    {
      $this->PredefinedTime = $PredefinedTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportTimeZone()
    {
      return $this->ReportTimeZone;
    }

    /**
     * @param string $ReportTimeZone
     * @return \PMG\BingAds\Reporting\ReportTime
     */
    public function setReportTimeZone($ReportTimeZone)
    {
      $this->ReportTimeZone = $ReportTimeZone;
      return $this;
    }

}
