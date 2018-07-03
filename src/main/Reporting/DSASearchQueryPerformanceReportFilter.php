<?php

namespace PMG\BingAds\Reporting;

class DSASearchQueryPerformanceReportFilter
{

    /**
     * @see \PMG\BingAds\Reporting\AccountStatusReportFilter for valid values
     *
     * @var list $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdGroupStatusReportFilter for valid values
     *
     * @var list $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdStatusReportFilter for valid values
     *
     * @var list $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var boolean $ExcludeZeroClicks
     */
    protected $ExcludeZeroClicks = null;

    /**
     * @var ArrayOfstring $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfstring $SearchQueries
     */
    protected $SearchQueries = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return list
     */
    public function getAccountStatus()
    {
      return $this->AccountStatus;
    }

    /**
     * @param list $AccountStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdGroupStatus()
    {
      return $this->AdGroupStatus;
    }

    /**
     * @param list $AdGroupStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdStatus()
    {
      return $this->AdStatus;
    }

    /**
     * @param list $AdStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
      $this->AdStatus = $AdStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getCampaignStatus()
    {
      return $this->CampaignStatus;
    }

    /**
     * @param list $CampaignStatus
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeZeroClicks()
    {
      return $this->ExcludeZeroClicks;
    }

    /**
     * @param boolean $ExcludeZeroClicks
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setExcludeZeroClicks($ExcludeZeroClicks)
    {
      $this->ExcludeZeroClicks = $ExcludeZeroClicks;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param ArrayOfstring $LanguageCode
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSearchQueries()
    {
      return $this->SearchQueries;
    }

    /**
     * @param ArrayOfstring $SearchQueries
     * @return \PMG\BingAds\Reporting\DSASearchQueryPerformanceReportFilter
     */
    public function setSearchQueries($SearchQueries)
    {
      $this->SearchQueries = $SearchQueries;
      return $this;
    }

}
