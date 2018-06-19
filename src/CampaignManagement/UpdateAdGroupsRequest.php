<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateAdGroupsRequest
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOfAdGroup $AdGroups
     */
    protected $AdGroups = null;

    /**
     * @var boolean $UpdateAudienceAdsBidAdjustment
     */
    protected $UpdateAudienceAdsBidAdjustment = null;

    /**
     * @var boolean $ReturnInheritedBidStrategyTypes
     */
    protected $ReturnInheritedBidStrategyTypes = null;

    /**
     * @param int $CampaignId
     * @param ArrayOfAdGroup $AdGroups
     * @param boolean $UpdateAudienceAdsBidAdjustment
     * @param boolean $ReturnInheritedBidStrategyTypes
     */
    public function __construct($CampaignId, $AdGroups, $UpdateAudienceAdsBidAdjustment, $ReturnInheritedBidStrategyTypes)
    {
      $this->CampaignId = $CampaignId;
      $this->AdGroups = $AdGroups;
      $this->UpdateAudienceAdsBidAdjustment = $UpdateAudienceAdsBidAdjustment;
      $this->ReturnInheritedBidStrategyTypes = $ReturnInheritedBidStrategyTypes;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->CampaignId;
    }

    /**
     * @param int $CampaignId
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupsRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return ArrayOfAdGroup
     */
    public function getAdGroups()
    {
      return $this->AdGroups;
    }

    /**
     * @param ArrayOfAdGroup $AdGroups
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupsRequest
     */
    public function setAdGroups($AdGroups)
    {
      $this->AdGroups = $AdGroups;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateAudienceAdsBidAdjustment()
    {
      return $this->UpdateAudienceAdsBidAdjustment;
    }

    /**
     * @param boolean $UpdateAudienceAdsBidAdjustment
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupsRequest
     */
    public function setUpdateAudienceAdsBidAdjustment($UpdateAudienceAdsBidAdjustment)
    {
      $this->UpdateAudienceAdsBidAdjustment = $UpdateAudienceAdsBidAdjustment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnInheritedBidStrategyTypes()
    {
      return $this->ReturnInheritedBidStrategyTypes;
    }

    /**
     * @param boolean $ReturnInheritedBidStrategyTypes
     * @return \PMG\BingAds\CampaignManagement\UpdateAdGroupsRequest
     */
    public function setReturnInheritedBidStrategyTypes($ReturnInheritedBidStrategyTypes)
    {
      $this->ReturnInheritedBidStrategyTypes = $ReturnInheritedBidStrategyTypes;
      return $this;
    }

}
