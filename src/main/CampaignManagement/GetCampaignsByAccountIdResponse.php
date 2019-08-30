<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignsByAccountIdResponse
{

    /**
     * @var ArrayOfCampaign $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @param ArrayOfCampaign $Campaigns
     */
    public function __construct($Campaigns = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByAccountIdResponse
     */
    public function setCampaigns($Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }

}
