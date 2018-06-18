<?php

namespace PMG\BingAds\CampaignMangagement;

class GetCampaignsByAccountIdResponse
{

    /**
     * @var ArrayOfCampaign $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @param ArrayOfCampaign $Campaigns
     */
    public function __construct($Campaigns)
    {
      $this->Campaigns = $Campaigns;
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
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignsByAccountIdResponse
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

}
