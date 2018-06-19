<?php

namespace PMG\BingAds\CampaignManagement;

class AddAdGroupsRequest
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
     * @var boolean $ReturnInheritedBidStrategyTypes
     */
    protected $ReturnInheritedBidStrategyTypes = null;

    /**
     * @param int $CampaignId
     * @param ArrayOfAdGroup $AdGroups
     * @param boolean $ReturnInheritedBidStrategyTypes
     */
    public function __construct($CampaignId, $AdGroups, $ReturnInheritedBidStrategyTypes)
    {
      $this->CampaignId = $CampaignId;
      $this->AdGroups = $AdGroups;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsRequest
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsRequest
     */
    public function setAdGroups($AdGroups)
    {
      $this->AdGroups = $AdGroups;
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
     * @return \PMG\BingAds\CampaignManagement\AddAdGroupsRequest
     */
    public function setReturnInheritedBidStrategyTypes($ReturnInheritedBidStrategyTypes)
    {
      $this->ReturnInheritedBidStrategyTypes = $ReturnInheritedBidStrategyTypes;
      return $this;
    }

}
