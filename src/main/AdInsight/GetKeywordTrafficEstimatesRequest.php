<?php

namespace PMG\BingAds\AdInsight;

class GetKeywordTrafficEstimatesRequest
{

    /**
     * @var ArrayOfCampaignEstimator $CampaignEstimators
     */
    protected $CampaignEstimators = null;

    /**
     * @param ArrayOfCampaignEstimator $CampaignEstimators
     */
    public function __construct($CampaignEstimators = null)
    {
      $this->CampaignEstimators = $CampaignEstimators;
    }

    /**
     * @return ArrayOfCampaignEstimator
     */
    public function getCampaignEstimators()
    {
      return $this->CampaignEstimators;
    }

    /**
     * @param ArrayOfCampaignEstimator $CampaignEstimators
     * @return \PMG\BingAds\AdInsight\GetKeywordTrafficEstimatesRequest
     */
    public function setCampaignEstimators($CampaignEstimators)
    {
      $this->CampaignEstimators = $CampaignEstimators;
      return $this;
    }

}
