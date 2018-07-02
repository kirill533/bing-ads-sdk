<?php

namespace PMG\BingAds\Reporting;

class ReportRequestStatus
{

    /**
     * @var string $ReportDownloadUrl
     */
    protected $ReportDownloadUrl = null;

    /**
     * @var ReportRequestStatusType $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReportDownloadUrl()
    {
      return $this->ReportDownloadUrl;
    }

    /**
     * @param string $ReportDownloadUrl
     * @return \PMG\BingAds\Reporting\ReportRequestStatus
     */
    public function setReportDownloadUrl($ReportDownloadUrl)
    {
      $this->ReportDownloadUrl = $ReportDownloadUrl;
      return $this;
    }

    /**
     * @return ReportRequestStatusType
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ReportRequestStatusType $Status
     * @return \PMG\BingAds\Reporting\ReportRequestStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
