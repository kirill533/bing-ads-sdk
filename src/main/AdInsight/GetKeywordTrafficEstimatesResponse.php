<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordTrafficEstimatesResponse
{

    /**
     * @var ArrayOfCampaignEstimate $CampaignEstimates
     */
    protected $CampaignEstimates = null;

    /**
     * @param ArrayOfCampaignEstimate $CampaignEstimates
     */
    public function __construct($CampaignEstimates = null)
    {
      $this->CampaignEstimates = $CampaignEstimates;
    }

    /**
     * @return ArrayOfCampaignEstimate
     */
    public function getCampaignEstimates()
    {
      return $this->CampaignEstimates;
    }

    /**
     * @param ArrayOfCampaignEstimate $CampaignEstimates
     * @return \PMG\BingAds\AdInsight\GetKeywordTrafficEstimatesResponse
     */
    public function setCampaignEstimates($CampaignEstimates)
    {
      $this->CampaignEstimates = $CampaignEstimates;
      return $this;
    }

}
