<?php

namespace PMG\BingAds\Reporting;

class PollGenerateReportResponse
{

    /**
     * @var ReportRequestStatus $ReportRequestStatus
     */
    protected $ReportRequestStatus = null;

    /**
     * @param ReportRequestStatus $ReportRequestStatus
     */
    public function __construct($ReportRequestStatus = null)
    {
    $this->ReportRequestStatus = $ReportRequestStatus;
    }

    /**
     * @return ReportRequestStatus
     */
    public function getReportRequestStatus()
    {
        return $this->ReportRequestStatus;
    }

    /**
     * @param ReportRequestStatus $ReportRequestStatus
     * @return \PMG\BingAds\Reporting\PollGenerateReportResponse
     */
    public function setReportRequestStatus($ReportRequestStatus)
    {
        $this->ReportRequestStatus = $ReportRequestStatus;
        return $this;
    }

}
