<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdGroupsByCampaignIdRequest
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @param int $CampaignId
     */
    public function __construct($CampaignId)
    {
      $this->CampaignId = $CampaignId;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdGroupsByCampaignIdRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

}
