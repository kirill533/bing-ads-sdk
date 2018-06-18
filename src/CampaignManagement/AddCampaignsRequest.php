<?php

namespace PMG\BingAds\CampaignMangagement;

class AddCampaignsRequest
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
    public function __construct($AccountId, $Campaigns)
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
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignsRequest
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
     * @return \PMG\BingAds\CampaignMangagement\AddCampaignsRequest
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

}