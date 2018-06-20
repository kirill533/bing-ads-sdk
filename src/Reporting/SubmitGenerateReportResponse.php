<?php

namespace PMG\BingAds\Reporting;

class SubmitGenerateReportResponse
{

    /**
     * @var string $ReportRequestId
     */
    protected $ReportRequestId = null;

    /**
     * @param string $ReportRequestId
     */
    public function __construct($ReportRequestId = null)
    {
      $this->ReportRequestId = $ReportRequestId;
    }

    /**
     * @return string
     */
    public function getReportRequestId()
    {
      return $this->ReportRequestId;
    }

    /**
     * @param string $ReportRequestId
     * @return \PMG\BingAds\Reporting\SubmitGenerateReportResponse
     */
    public function setReportRequestId($ReportRequestId)
    {
      $this->ReportRequestId = $ReportRequestId;
      return $this;
    }

}
