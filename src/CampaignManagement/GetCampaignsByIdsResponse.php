<?php

namespace PMG\BingAds\CampaignMangagement;

class GetCampaignsByIdsResponse
{

    /**
     * @var ArrayOfCampaign $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfCampaign $Campaigns
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Campaigns, $PartialErrors)
    {
      $this->Campaigns = $Campaigns;
      $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignsByIdsResponse
     */
    public function setCampaigns($Campaigns)
    {
      $this->Campaigns = $Campaigns;
      return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
      return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignMangagement\GetCampaignsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
      $this->PartialErrors = $PartialErrors;
      return $this;
    }

}
