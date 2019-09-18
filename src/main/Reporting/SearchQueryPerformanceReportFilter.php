<?php

namespace PMG\BingAds\Reporting;

class SearchQueryPerformanceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var AdStatusReportFilter $AdStatus
     */
    protected $AdStatus = null;

    /**
     * @var AdTypeReportFilter $AdType
     */
    protected $AdType = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DeliveredMatchTypeReportFilter $DeliveredMatchType
     */
    protected $DeliveredMatchType = null;

    /**
     * @var boolean $ExcludeZeroClicks
     */
    protected $ExcludeZeroClicks = null;

    /**
     * @var KeywordStatusReportFilter $KeywordStatus
     */
    protected $KeywordStatus = null;

    /**
     * @var LanguageReportFilter $Language
     */
    protected $Language = null;

    /**
     * @var ArrayOfstring $SearchQueries
     */
    protected $SearchQueries = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountStatusReportFilter
     */
    public function getAccountStatus()
    {
        return $this->AccountStatus;
    }

    /**
     * @param AccountStatusReportFilter $AccountStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
        $this->AccountStatus = $AccountStatus;
        return $this;
    }

    /**
     * @return AdGroupStatusReportFilter
     */
    public function getAdGroupStatus()
    {
        return $this->AdGroupStatus;
    }

    /**
     * @param AdGroupStatusReportFilter $AdGroupStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
        $this->AdGroupStatus = $AdGroupStatus;
        return $this;
    }

    /**
     * @return AdStatusReportFilter
     */
    public function getAdStatus()
    {
        return $this->AdStatus;
    }

    /**
     * @param AdStatusReportFilter $AdStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAdStatus($AdStatus)
    {
        $this->AdStatus = $AdStatus;
        return $this;
    }

    /**
     * @return AdTypeReportFilter
     */
    public function getAdType()
    {
        return $this->AdType;
    }

    /**
     * @param AdTypeReportFilter $AdType
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setAdType($AdType)
    {
        $this->AdType = $AdType;
        return $this;
    }

    /**
     * @return CampaignStatusReportFilter
     */
    public function getCampaignStatus()
    {
        return $this->CampaignStatus;
    }

    /**
     * @param CampaignStatusReportFilter $CampaignStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setCampaignStatus($CampaignStatus)
    {
        $this->CampaignStatus = $CampaignStatus;
        return $this;
    }

    /**
     * @return DeliveredMatchTypeReportFilter
     */
    public function getDeliveredMatchType()
    {
        return $this->DeliveredMatchType;
    }

    /**
     * @param DeliveredMatchTypeReportFilter $DeliveredMatchType
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
     * @return KeywordStatusReportFilter
     */
    public function getKeywordStatus()
    {
        return $this->KeywordStatus;
    }

    /**
     * @param KeywordStatusReportFilter $KeywordStatus
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
        $this->KeywordStatus = $KeywordStatus;
        return $this;
    }

    /**
     * @return LanguageReportFilter
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param LanguageReportFilter $Language
     * @return \PMG\BingAds\Reporting\SearchQueryPerformanceReportFilter
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
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
