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
     * @see \PMG\BingAds\CampaignManagement\BudgetLimitType for valid values
     *
     * @var string $BudgetType
     */
    protected $BudgetType = null;

    /**
     * @var float $DailyBudget
     */
    protected $DailyBudget = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

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
     * @see \PMG\BingAds\CampaignManagement\CampaignStatus for valid values
     *
     * @var string $Status
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
     * @see \PMG\BingAds\CampaignManagement\CampaignType for valid values
     *
     * @var list $CampaignType
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
     * @return string
     */
    public function getBudgetType()
    {
      return $this->BudgetType;
    }

    /**
     * @param string $BudgetType
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \PMG\BingAds\CampaignManagement\Campaign
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
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
     * @return list
     */
    public function getCampaignType()
    {
      return $this->CampaignType;
    }

    /**
     * @param list $CampaignType
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

}