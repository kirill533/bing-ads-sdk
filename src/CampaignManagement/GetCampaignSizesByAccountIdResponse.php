<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignSizesByAccountIdResponse
{

    /**
     * @var ArrayOfCampaignSize $CampaignSizes
     */
    protected $CampaignSizes = null;

    /**
     * @param ArrayOfCampaignSize $CampaignSizes
     */
    public function __construct($CampaignSizes = null)
    {
      $this->CampaignSizes = $CampaignSizes;
    }

    /**
     * @return ArrayOfCampaignSize
     */
    public function getCampaignSizes()
    {
      return $this->CampaignSizes;
    }

    /**
     * @param ArrayOfCampaignSize $CampaignSizes
     * @return \PMG\BingAds\CampaignManagement\GetCampaignSizesByAccountIdResponse
     */
    public function setCampaignSizes($CampaignSizes)
    {
      $this->CampaignSizes = $CampaignSizes;
      return $this;
    }

}
