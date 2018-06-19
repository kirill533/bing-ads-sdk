<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordOpportunitiesRequest
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
     * @var KeywordOpportunityType $OpportunityType
     */
    protected $OpportunityType = null;

    /**
     * @param int $AdGroupId
     * @param int $CampaignId
     * @param KeywordOpportunityType $OpportunityType
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
     * @return \PMG\BingAds\AdInsight\GetKeywordOpportunitiesRequest
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
     * @return \PMG\BingAds\AdInsight\GetKeywordOpportunitiesRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return KeywordOpportunityType
     */
    public function getOpportunityType()
    {
      return $this->OpportunityType;
    }

    /**
     * @param KeywordOpportunityType $OpportunityType
     * @return \PMG\BingAds\AdInsight\GetKeywordOpportunitiesRequest
     */
    public function setOpportunityType($OpportunityType)
    {
      $this->OpportunityType = $OpportunityType;
      return $this;
    }

}
