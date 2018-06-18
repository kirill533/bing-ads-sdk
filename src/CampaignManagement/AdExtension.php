<?php

namespace PMG\BingAds\CampaignMangagement;

class AdExtension
{

    /**
     * @var int $DevicePreference
     */
    protected $DevicePreference = null;

    /**
     * @var ArrayOfKeyValuePairOfstringstring $ForwardCompatibilityMap
     */
    protected $ForwardCompatibilityMap = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var Schedule $Scheduling
     */
    protected $Scheduling = null;

    /**
     * @var AdExtensionStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var int $Version
     */
    protected $Version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDevicePreference()
    {
      return $this->DevicePreference;
    }

    /**
     * @param int $DevicePreference
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setDevicePreference($DevicePreference)
    {
      $this->DevicePreference = $DevicePreference;
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
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
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
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return Schedule
     */
    public function getScheduling()
    {
      return $this->Scheduling;
    }

    /**
     * @param Schedule $Scheduling
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setScheduling($Scheduling)
    {
      $this->Scheduling = $Scheduling;
      return $this;
    }

    /**
     * @return AdExtensionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AdExtensionStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param int $Version
     * @return \PMG\BingAds\CampaignMangagement\AdExtension
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
