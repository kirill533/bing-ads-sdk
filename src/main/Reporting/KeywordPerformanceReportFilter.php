<?php

namespace PMG\BingAds\Reporting;

class KeywordPerformanceReportFilter
{

    /**
     * @var AccountStatusReportFilter $AccountStatus
     */
    protected $AccountStatus = null;

    /**
     * @var AdDistributionReportFilter $AdDistribution
     */
    protected $AdDistribution = null;

    /**
     * @var AdGroupStatusReportFilter $AdGroupStatus
     */
    protected $AdGroupStatus = null;

    /**
     * @var ArrayOfint $AdRelevance
     */
    protected $AdRelevance = null;

    /**
     * @var AdTypeReportFilter $AdType
     */
    protected $AdType = null;

    /**
     * @var BidMatchTypeReportFilter $BidMatchType
     */
    protected $BidMatchType = null;

    /**
     * @var BidStrategyTypeReportFilter $BidStrategyType
     */
    protected $BidStrategyType = null;

    /**
     * @var CampaignStatusReportFilter $CampaignStatus
     */
    protected $CampaignStatus = null;

    /**
     * @var DeliveredMatchTypeReportFilter $DeliveredMatchType
     */
    protected $DeliveredMatchType = null;

    /**
     * @var DeviceTypeReportFilter $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var ArrayOfint $ExpectedCtr
     */
    protected $ExpectedCtr = null;

    /**
     * @var KeywordStatusReportFilter $KeywordStatus
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
     * @return AccountStatusReportFilter
     */
    public function getAccountStatus()
    {
      return $this->AccountStatus;
    }

    /**
     * @param AccountStatusReportFilter $AccountStatus
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAccountStatus($AccountStatus)
    {
      $this->AccountStatus = $AccountStatus;
      return $this;
    }

    /**
     * @return AdDistributionReportFilter
     */
    public function getAdDistribution()
    {
      return $this->AdDistribution;
    }

    /**
     * @param AdDistributionReportFilter $AdDistribution
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdDistribution($AdDistribution)
    {
      $this->AdDistribution = $AdDistribution;
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
     * @return AdTypeReportFilter
     */
    public function getAdType()
    {
      return $this->AdType;
    }

    /**
     * @param AdTypeReportFilter $AdType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setAdType($AdType)
    {
      $this->AdType = $AdType;
      return $this;
    }

    /**
     * @return BidMatchTypeReportFilter
     */
    public function getBidMatchType()
    {
      return $this->BidMatchType;
    }

    /**
     * @param BidMatchTypeReportFilter $BidMatchType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setBidMatchType($BidMatchType)
    {
      $this->BidMatchType = $BidMatchType;
      return $this;
    }

    /**
     * @return BidStrategyTypeReportFilter
     */
    public function getBidStrategyType()
    {
      return $this->BidStrategyType;
    }

    /**
     * @param BidStrategyTypeReportFilter $BidStrategyType
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setBidStrategyType($BidStrategyType)
    {
      $this->BidStrategyType = $BidStrategyType;
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
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
     * @return \PMG\BingAds\Reporting\KeywordPerformanceReportFilter
     */
    public function setDeliveredMatchType($DeliveredMatchType)
    {
      $this->DeliveredMatchType = $DeliveredMatchType;
      return $this;
    }

    /**
     * @return DeviceTypeReportFilter
     */
    public function getDeviceType()
    {
      return $this->DeviceType;
    }

    /**
     * @param DeviceTypeReportFilter $DeviceType
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
     * @return KeywordStatusReportFilter
     */
    public function getKeywordStatus()
    {
      return $this->KeywordStatus;
    }

    /**
     * @param KeywordStatusReportFilter $KeywordStatus
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
