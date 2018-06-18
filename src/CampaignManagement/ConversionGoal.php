<?php

namespace PMG\BingAds\CampaignMangagement;

class ConversionGoal
{

    /**
     * @var int $ConversionWindowInMinutes
     */
    protected $ConversionWindowInMinutes = null;

    /**
     * @var ConversionGoalCountType $CountType
     */
    protected $CountType = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ConversionGoalRevenue $Revenue
     */
    protected $Revenue = null;

    /**
     * @var EntityScope $Scope
     */
    protected $Scope = null;

    /**
     * @var ConversionGoalStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $TagId
     */
    protected $TagId = null;

    /**
     * @var ConversionGoalTrackingStatus $TrackingStatus
     */
    protected $TrackingStatus = null;

    /**
     * @var ConversionGoalType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getConversionWindowInMinutes()
    {
      return $this->ConversionWindowInMinutes;
    }

    /**
     * @param int $ConversionWindowInMinutes
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setConversionWindowInMinutes($ConversionWindowInMinutes)
    {
      $this->ConversionWindowInMinutes = $ConversionWindowInMinutes;
      return $this;
    }

    /**
     * @return ConversionGoalCountType
     */
    public function getCountType()
    {
      return $this->CountType;
    }

    /**
     * @param ConversionGoalCountType $CountType
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setCountType($CountType)
    {
      $this->CountType = $CountType;
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
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
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
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ConversionGoalRevenue
     */
    public function getRevenue()
    {
      return $this->Revenue;
    }

    /**
     * @param ConversionGoalRevenue $Revenue
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setRevenue($Revenue)
    {
      $this->Revenue = $Revenue;
      return $this;
    }

    /**
     * @return EntityScope
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param EntityScope $Scope
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
      return $this;
    }

    /**
     * @return ConversionGoalStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ConversionGoalStatus $Status
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getTagId()
    {
      return $this->TagId;
    }

    /**
     * @param int $TagId
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setTagId($TagId)
    {
      $this->TagId = $TagId;
      return $this;
    }

    /**
     * @return ConversionGoalTrackingStatus
     */
    public function getTrackingStatus()
    {
      return $this->TrackingStatus;
    }

    /**
     * @param ConversionGoalTrackingStatus $TrackingStatus
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setTrackingStatus($TrackingStatus)
    {
      $this->TrackingStatus = $TrackingStatus;
      return $this;
    }

    /**
     * @return ConversionGoalType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ConversionGoalType $Type
     * @return \PMG\BingAds\CampaignMangagement\ConversionGoal
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
