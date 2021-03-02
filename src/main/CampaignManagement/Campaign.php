<?php

namespace PMG\BingAds\CampaignManagement;

class Campaign
{

    /**
     * @var int $AudienceAdsBidAdjustment
     */
    protected $AudienceAdsBidAdjustment = null;

    /**
     * @var BiddingScheme $BiddingScheme
     */
    protected $BiddingScheme = null;

    /**
     * @var BudgetLimitType $BudgetType
     */
    protected $BudgetType = null;

    /**
     * @var float $DailyBudget
     */
    protected $DailyBudget = null;

    /**
     * @var int $ExperimentId
     */
    protected $ExperimentId = null;

    /**
     * @var string $FinalUrlSuffix
     */
    protected $FinalUrlSuffix = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var CampaignStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    /**
     * @var CampaignType $CampaignType
     */
    protected $CampaignType = null;

    /**
     * @var ArrayOfSetting $Settings
     */
    protected $Settings = null;

    /**
     * @var int $BudgetId
     */
    protected $BudgetId = null;

    /**
     * @var ArrayOfstring $Languages
     */
    protected $Languages = null;

    /**
     * @var boolean $AdScheduleUseSearcherTimeZone
     */
    protected $AdScheduleUseSearcherTimeZone = null;

    /**
     * @var int $BidStrategyId
     */
    protected $BidStrategyId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAudienceAdsBidAdjustment()
    {
        return $this->AudienceAdsBidAdjustment;
    }

    /**
     * @param int $AudienceAdsBidAdjustment
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setAudienceAdsBidAdjustment($AudienceAdsBidAdjustment)
    {
        $this->AudienceAdsBidAdjustment = $AudienceAdsBidAdjustment;
        return $this;
    }

    /**
     * @return BiddingScheme
     */
    public function getBiddingScheme()
    {
        return $this->BiddingScheme;
    }

    /**
     * @param BiddingScheme $BiddingScheme
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setBiddingScheme($BiddingScheme)
    {
        $this->BiddingScheme = $BiddingScheme;
        return $this;
    }

    /**
     * @return BudgetLimitType
     */
    public function getBudgetType()
    {
        return $this->BudgetType;
    }

    /**
     * @param BudgetLimitType $BudgetType
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setBudgetType($BudgetType)
    {
        $this->BudgetType = $BudgetType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyBudget()
    {
        return $this->DailyBudget;
    }

    /**
     * @param float $DailyBudget
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setDailyBudget($DailyBudget)
    {
        $this->DailyBudget = $DailyBudget;
        return $this;
    }

    /**
     * @return int
     */
    public function getExperimentId()
    {
        return $this->ExperimentId;
    }

    /**
     * @param int $ExperimentId
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setExperimentId($ExperimentId)
    {
        $this->ExperimentId = $ExperimentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return $this->FinalUrlSuffix;
    }

    /**
     * @param string $FinalUrlSuffix
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setFinalUrlSuffix($FinalUrlSuffix)
    {
        $this->FinalUrlSuffix = $FinalUrlSuffix;
        return $this;
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getForwardCompatibilityMap()
    {
        return $this->ForwardCompatibilityMap;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setForwardCompatibilityMap($ForwardCompatibilityMap)
    {
        $this->ForwardCompatibilityMap = $ForwardCompatibilityMap;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return CampaignStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param CampaignStatus $Status
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
        return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setSubType($SubType)
    {
        $this->SubType = $SubType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setTimeZone($TimeZone)
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return $this->TrackingUrlTemplate;
    }

    /**
     * @param string $TrackingUrlTemplate
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setTrackingUrlTemplate($TrackingUrlTemplate)
    {
        $this->TrackingUrlTemplate = $TrackingUrlTemplate;
        return $this;
    }

    /**
     * @return CustomParameters
     */
    public function getUrlCustomParameters()
    {
        return $this->UrlCustomParameters;
    }

    /**
     * @param CustomParameters $UrlCustomParameters
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
        $this->UrlCustomParameters = $UrlCustomParameters;
        return $this;
    }

    /**
     * @return CampaignType
     */
    public function getCampaignType()
    {
        return $this->CampaignType;
    }

    /**
     * @param CampaignType $CampaignType
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setCampaignType($CampaignType)
    {
        $this->CampaignType = $CampaignType;
        return $this;
    }

    /**
     * @return ArrayOfSetting
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * @param ArrayOfSetting $Settings
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setSettings($Settings)
    {
        $this->Settings = $Settings;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudgetId()
    {
        return $this->BudgetId;
    }

    /**
     * @param int $BudgetId
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setBudgetId($BudgetId)
    {
        $this->BudgetId = $BudgetId;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLanguages()
    {
        return $this->Languages;
    }

    /**
     * @param ArrayOfstring $Languages
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setLanguages($Languages)
    {
        $this->Languages = $Languages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdScheduleUseSearcherTimeZone()
    {
        return $this->AdScheduleUseSearcherTimeZone;
    }

    /**
     * @param boolean $AdScheduleUseSearcherTimeZone
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setAdScheduleUseSearcherTimeZone($AdScheduleUseSearcherTimeZone)
    {
        $this->AdScheduleUseSearcherTimeZone = $AdScheduleUseSearcherTimeZone;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidStrategyId()
    {
        return $this->BidStrategyId;
    }

    /**
     * @param int $BidStrategyId
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setBidStrategyId($BidStrategyId)
    {
        $this->BidStrategyId = $BidStrategyId;
        return $this;
    }

}
