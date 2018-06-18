<?php

namespace PMG\BingAds\CampaignMangagement;

class AdGroup
{

    /**
     * @var AdRotation $AdRotation
     */
    protected $AdRotation = null;

    /**
     * @var int $AudienceAdsBidAdjustment
     */
    protected $AudienceAdsBidAdjustment = null;

    /**
     * @var BiddingScheme $BiddingScheme
     */
    protected $BiddingScheme = null;

    /**
     * @var Bid $CpcBid
     */
    protected $CpcBid = null;

    /**
     * @var Date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var Network $Network
     */
    protected $Network = null;

    /**
     * @var AdGroupPrivacyStatus $PrivacyStatus
     */
    protected $PrivacyStatus = null;

    /**
     * @var ArrayOfSetting $Settings
     */
    protected $Settings = null;

    /**
     * @var Date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var AdGroupStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $TrackingUrlTemplate
     */
    protected $TrackingUrlTemplate = null;

    /**
     * @var CustomParameters $UrlCustomParameters
     */
    protected $UrlCustomParameters = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdRotation
     */
    public function getAdRotation()
    {
      return $this->AdRotation;
    }

    /**
     * @param AdRotation $AdRotation
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setAdRotation($AdRotation)
    {
      $this->AdRotation = $AdRotation;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setBiddingScheme($BiddingScheme)
    {
      $this->BiddingScheme = $BiddingScheme;
      return $this;
    }

    /**
     * @return Bid
     */
    public function getCpcBid()
    {
      return $this->CpcBid;
    }

    /**
     * @param Bid $CpcBid
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setCpcBid($CpcBid)
    {
      $this->CpcBid = $CpcBid;
      return $this;
    }

    /**
     * @return Date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param Date $EndDate
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Network
     */
    public function getNetwork()
    {
      return $this->Network;
    }

    /**
     * @param Network $Network
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

    /**
     * @return AdGroupPrivacyStatus
     */
    public function getPrivacyStatus()
    {
      return $this->PrivacyStatus;
    }

    /**
     * @param AdGroupPrivacyStatus $PrivacyStatus
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setPrivacyStatus($PrivacyStatus)
    {
      $this->PrivacyStatus = $PrivacyStatus;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setSettings($Settings)
    {
      $this->Settings = $Settings;
      return $this;
    }

    /**
     * @return Date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param Date $StartDate
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return AdGroupStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AdGroupStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
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
     * @return \PMG\BingAds\CampaignMangagement\AdGroup
     */
    public function setUrlCustomParameters($UrlCustomParameters)
    {
      $this->UrlCustomParameters = $UrlCustomParameters;
      return $this;
    }

}
