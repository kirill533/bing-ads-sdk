<?php

namespace PMG\BingAds\CampaignManagement;

class ConversionGoal
{

    /**
     * @var int $ConversionWindowInMinutes
     */
    protected $ConversionWindowInMinutes = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalCountType for valid values
     *
     * @var string $CountType
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
     * @see \PMG\BingAds\CampaignManagement\EntityScope for valid values
     *
     * @var string $Scope
     */
    protected $Scope = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalStatus for valid values
     *
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $TagId
     */
    protected $TagId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalTrackingStatus for valid values
     *
     * @var string $TrackingStatus
     */
    protected $TrackingStatus = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\ConversionGoalType for valid values
     *
     * @var list $Type
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setConversionWindowInMinutes($ConversionWindowInMinutes)
    {
      $this->ConversionWindowInMinutes = $ConversionWindowInMinutes;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountType()
    {
      return $this->CountType;
    }

    /**
     * @param string $CountType
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setRevenue($Revenue)
    {
      $this->Revenue = $Revenue;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->Scope;
    }

    /**
     * @param string $Scope
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setScope($Scope)
    {
      $this->Scope = $Scope;
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
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
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setTagId($TagId)
    {
      $this->TagId = $TagId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingStatus()
    {
      return $this->TrackingStatus;
    }

    /**
     * @param string $TrackingStatus
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setTrackingStatus($TrackingStatus)
    {
      $this->TrackingStatus = $TrackingStatus;
      return $this;
    }

    /**
     * @return list
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param list $Type
     * @return \PMG\BingAds\CampaignManagement\ConversionGoal
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
