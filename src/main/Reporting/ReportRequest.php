<?php

namespace PMG\BingAds\Reporting;

class ReportRequest
{

    /**
     * @var boolean $ExcludeColumnHeaders
     */
    protected $ExcludeColumnHeaders = null;

    /**
     * @var boolean $ExcludeReportFooter
     */
    protected $ExcludeReportFooter = null;

    /**
     * @var boolean $ExcludeReportHeader
     */
    protected $ExcludeReportHeader = null;

    /**
     * @see \PMG\BingAds\Reporting\ReportFormat for valid values
     *
     * @var string $Format
     */
    protected $Format = null;

    /**
     * @see \PMG\BingAds\Reporting\ReportLanguage for valid values
     *
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $ReportName
     */
    protected $ReportName = null;

    /**
     * @var boolean $ReturnOnlyCompleteData
     */
    protected $ReturnOnlyCompleteData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getExcludeColumnHeaders()
    {
      return $this->ExcludeColumnHeaders;
    }

    /**
     * @param boolean $ExcludeColumnHeaders
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setExcludeColumnHeaders($ExcludeColumnHeaders)
    {
      $this->ExcludeColumnHeaders = $ExcludeColumnHeaders;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeReportFooter()
    {
      return $this->ExcludeReportFooter;
    }

    /**
     * @param boolean $ExcludeReportFooter
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setExcludeReportFooter($ExcludeReportFooter)
    {
      $this->ExcludeReportFooter = $ExcludeReportFooter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeReportHeader()
    {
      return $this->ExcludeReportHeader;
    }

    /**
     * @param boolean $ExcludeReportHeader
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setExcludeReportHeader($ExcludeReportHeader)
    {
      $this->ExcludeReportHeader = $ExcludeReportHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->Format;
    }

    /**
     * @param string $Format
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setFormat($Format)
    {
      $this->Format = $Format;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportName()
    {
      return $this->ReportName;
    }

    /**
     * @param string $ReportName
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setReportName($ReportName)
    {
      $this->ReportName = $ReportName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnOnlyCompleteData()
    {
      return $this->ReturnOnlyCompleteData;
    }

    /**
     * @param boolean $ReturnOnlyCompleteData
     * @return \PMG\BingAds\Reporting\ReportRequest
     */
    public function setReturnOnlyCompleteData($ReturnOnlyCompleteData)
    {
      $this->ReturnOnlyCompleteData = $ReturnOnlyCompleteData;
      return $this;
    }

}
