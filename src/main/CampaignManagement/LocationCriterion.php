<?php

namespace PMG\BingAds\CampaignManagement;

class LocationCriterion extends Criterion
{

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var ArrayOflong $EnclosedLocationIds
     */
    protected $EnclosedLocationIds = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var string $LocationType
     */
    protected $LocationType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \PMG\BingAds\CampaignManagement\LocationCriterion
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEnclosedLocationIds()
    {
      return $this->EnclosedLocationIds;
    }

    /**
     * @param ArrayOflong $EnclosedLocationIds
     * @return \PMG\BingAds\CampaignManagement\LocationCriterion
     */
    public function setEnclosedLocationIds($EnclosedLocationIds)
    {
      $this->EnclosedLocationIds = $EnclosedLocationIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
      return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \PMG\BingAds\CampaignManagement\LocationCriterion
     */
    public function setLocationId($LocationId)
    {
      $this->LocationId = $LocationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param string $LocationType
     * @return \PMG\BingAds\CampaignManagement\LocationCriterion
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

}
