<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateCampaignsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfCampaign $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @param int $AccountId
     * @param ArrayOfCampaign $Campaigns
     */
    public function __construct($AccountId = null, $Campaigns = null)
    {
      $this->AccountId = $AccountId;
      $this->Campaigns = $Campaigns;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param int $AccountId
     * @return \PMG\BingAds\CampaignManagement\UpdateCampaignsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOfCampaign
     */
    public function getCampaigns()
    {
      return $this->Campaigns;
    }

    /**
     * @param ArrayOfCampaign $Campaigns
     * @return \PMG\BingAds\CampaignManagement\UpdateCampaignsRequest
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

}
