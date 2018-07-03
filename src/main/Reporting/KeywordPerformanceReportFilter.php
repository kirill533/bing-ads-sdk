<?php

namespace PMG\BingAds\Reporting;

class KeywordPerformanceReportFilter
{

    /**
     * @see \PMG\BingAds\Reporting\AccountStatusReportFilter for valid values
     *
     * @var list $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @see \PMG\BingAds\Reporting\AdDistributionReportFilter for valid values
     *
     * @var list $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @see \PMG\BingAds\Reporting\AdGroupStatusReportFilter for valid values
     *
     * @var list $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var ArrayOfint $AdRelevance
     */
    protected $AdRelevance = null;

    /**
     * @see \PMG\BingAds\Reporting\AdTypeReportFilter for valid values
     *
     * @var list $AdType
     */
    protected $AdType = null;

    /**
     * @see \PMG\BingAds\Reporting\BidMatchTypeReportFilter for valid values
     *
     * @var list $BidMatchType
     */
    protected $BidMatchType = null;

    /**
     * @see \PMG\BingAds\Reporting\BidStrategyTypeReportFilter for valid values
     *
     * @var list $BidStrategyType
     */
    protected $BidStrategyType = null;

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
     * @see \PMG\BingAds\Reporting\DeviceTypeReportFilter for valid values
     *
     * @var list $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var ArrayOfint $ExpectedCtr
     */
    protected $ExpectedCtr = null;

    /**
     * @see \PMG\BingAds\Reporting\KeywordStatusReportFilter for valid values
     *
     * @var list $KeywordStatus
     */
    protected $KeywordStatus = null;

    /**
     * @var ArrayOfstring $Keywords
     */
    protected $Keywords = null;

    /**
     * @var ArrayOfint $LandingPageExperience
     */
    protected $LandingPageExperience = null;

    /**
     * @var ArrayOfstring $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfint $QualityScore
     */
    protected $QualityScore = null;

    
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getAdDistribution()
    {
      return $this->AdDistribution;
    }

    /**
     * @param list $AdDistribution
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdGroupStatus($AdGroupStatus)
    {
      $this->AdGroupStatus = $AdGroupStatus;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getAdRelevance()
    {
      return $this->AdRelevance;
    }

    /**
     * @param ArrayOfint $AdRelevance
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdRelevance($AdRelevance)
    {
      $this->AdRelevance = $AdRelevance;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdType($AdType)
    {
      $this->AdType = $AdType;
      return $this;
    }

    /**
     * @return list
     */
    public function getBidMatchType()
    {
      return $this->BidMatchType;
    }

    /**
     * @param list $BidMatchType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setBidMatchType($BidMatchType)
    {
      $this->BidMatchType = $BidMatchType;
      return $this;
    }

    /**
     * @return list
     */
    public function getBidStrategyType()
    {
      return $this->BidStrategyType;
    }

    /**
     * @param list $BidStrategyType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setBidStrategyType($BidStrategyType)
    {
      $this->BidStrategyType = $BidStrategyType;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setDeliveredMatchType($DeliveredMatchType)
    {
      $this->DeliveredMatchType = $DeliveredMatchType;
      return $this;
    }

    /**
     * @return list
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param list $DeviceType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setDeviceType($DeviceType)
    {
      $this->DeviceType = $DeviceType;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getExpectedCtr()
    {
      return $this->ExpectedCtr;
    }

    /**
     * @param ArrayOfint $ExpectedCtr
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setExpectedCtr($ExpectedCtr)
    {
      $this->ExpectedCtr = $ExpectedCtr;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setKeywordStatus($KeywordStatus)
    {
      $this->KeywordStatus = $KeywordStatus;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywords()
    {
      return $this->Keywords;
    }

    /**
     * @param ArrayOfstring $Keywords
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setKeywords($Keywords)
    {
      $this->Keywords = $Keywords;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getLandingPageExperience()
    {
      return $this->LandingPageExperience;
    }

    /**
     * @param ArrayOfint $LandingPageExperience
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setLandingPageExperience($LandingPageExperience)
    {
      $this->LandingPageExperience = $LandingPageExperience;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getQualityScore()
    {
      return $this->QualityScore;
    }

    /**
     * @param ArrayOfint $QualityScore
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setQualityScore($QualityScore)
    {
      $this->QualityScore = $QualityScore;
      return $this;
    }

}
