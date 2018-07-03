<?php

namespace PMG\BingAds\Reporting;

class SearchQueryPerformanceReportFilter
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
     * @see \PMG\BingAds\Reporting\AdTypeReportFilter for valid values
     *
     * @var list $AdType
     */
    protected $AdType = null;

    /**
     * @see \PMG\BingAds\Reporting\CampaignStatusReportFilter for valid values
     *
     * @var list $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\DeliveredMatchTypeReportFilter for valid values
     *
     * @var list $DeliveredMatchType
     */
    protected $DeliveredMatchType = null;

    /**
     * @var boolean $ExcludeZeroClicks
     */
    protected $ExcludeZeroClicks = null;

    /**
     * @see \PMG\BingAds\Reporting\KeywordStatusReportFilter for valid values
     *
     * @var list $KeywordStatus
     */
    protected $KeywordStatus = null;

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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
      $this->AdStatus = $AdStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdType()
    {
      return $this->AdType;
    }

    /**
     * @param list $AdType
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAdType($AdType)
    {
      $this->AdType = $AdType;
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
      $this->CampaignStatus = $CampaignStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeliveredMatchType()
    {
      return $this->DeliveredMatchType;
    }

    /**
     * @param list $DeliveredMatchType
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setDeliveredMatchType($DeliveredMatchType)
    {
      $this->DeliveredMatchType = $DeliveredMatchType;
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setExcludeZeroClicks($ExcludeZeroClicks)
    {
      $this->ExcludeZeroClicks = $ExcludeZeroClicks;
      return $this;
    }

    /**
     * @return list
     */
    public function getKeywordStatus()
    {
      return $this->KeywordStatus;
    }

    /**
     * @param list $KeywordStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
      $this->KeywordStatus = $KeywordStatus;
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setSearchQueries($SearchQueries)
    {
      $this->SearchQueries = $SearchQueries;
      return $this;
    }

}
