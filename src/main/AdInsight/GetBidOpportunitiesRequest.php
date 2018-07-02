<?php

namespace PMG\BingAds\AdInsight;

class GetBidOpportunitiesRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var BidOpportunityType $OpportunityType
     */
    protected $OpportunityType = null;

    /**
     * @param int $AdGroupId
     * @param int $CampaignId
     * @param BidOpportunityType $OpportunityType
     */
    public function __construct($AdGroupId = null, $CampaignId = null, $OpportunityType = null)
    {
      $this->AdGroupId = $AdGroupId;
      $this->CampaignId = $CampaignId;
      $this->OpportunityType = $OpportunityType;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\AdInsight\GetBidOpportunitiesRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
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
     * @return \PMG\BingAds\AdInsight\GetBidOpportunitiesRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return BidOpportunityType
     */
    public function getOpportunityType()
    {
      return $this->OpportunityType;
    }

    /**
     * @param BidOpportunityType $OpportunityType
     * @return \PMG\BingAds\AdInsight\GetBidOpportunitiesRequest
     */
    public function setOpportunityType($OpportunityType)
    {
      $this->OpportunityType = $OpportunityType;
      return $this;
    }

}
