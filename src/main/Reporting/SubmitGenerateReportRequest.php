<?php

namespace PMG\BingAds\Reporting;

class SubmitGenerateReportRequest
{

    /**
     * @var ReportRequest $ReportRequest
     */
    protected $ReportRequest = null;

    /**
     * @param ReportRequest $ReportRequest
     */
    public function __construct($ReportRequest = null)
    {
    $this->ReportRequest = $ReportRequest;
    }

    /**
     * @return ReportRequest
     */
    public function getReportRequest()
    {
        return $this->ReportRequest;
    }

    /**
     * @param ReportRequest $ReportRequest
     * @return \PMG\BingAds\Reporting\SubmitGenerateReportRequest
     */
    public function setReportRequest($ReportRequest)
    {
        $this->ReportRequest = $ReportRequest;
        return $this;
    }

}
