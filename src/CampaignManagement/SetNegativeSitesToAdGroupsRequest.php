<?php

namespace PMG\BingAds\CampaignManagement;

class SetNegativeSitesToAdGroupsRequest
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     */
    protected $AdGroupNegativeSites = null;

    /**
     * @param int $CampaignId
     * @param ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     */
    public function __construct($CampaignId, $AdGroupNegativeSites)
    {
      $this->CampaignId = $CampaignId;
      $this->AdGroupNegativeSites = $AdGroupNegativeSites;
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
     * @return \PMG\BingAds\CampaignManagement\SetNegativeSitesToAdGroupsRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return ArrayOfAdGroupNegativeSites
     */
    public function getAdGroupNegativeSites()
    {
      return $this->AdGroupNegativeSites;
    }

    /**
     * @param ArrayOfAdGroupNegativeSites $AdGroupNegativeSites
     * @return \PMG\BingAds\CampaignManagement\SetNegativeSitesToAdGroupsRequest
     */
    public function setAdGroupNegativeSites($AdGroupNegativeSites)
    {
      $this->AdGroupNegativeSites = $AdGroupNegativeSites;
      return $this;
    }

}
