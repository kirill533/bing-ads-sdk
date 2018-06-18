<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteAdGroupsRequest
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOflong $AdGroupIds
     */
    protected $AdGroupIds = null;

    /**
     * @param int $CampaignId
     * @param ArrayOflong $AdGroupIds
     */
    public function __construct($CampaignId, $AdGroupIds)
    {
      $this->CampaignId = $CampaignId;
      $this->AdGroupIds = $AdGroupIds;
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteAdGroupsRequest
     */
    public function setCampaignId($CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdGroupIds()
    {
      return $this->AdGroupIds;
    }

    /**
     * @param ArrayOflong $AdGroupIds
     * @return \PMG\BingAds\CampaignMangagement\DeleteAdGroupsRequest
     */
    public function setAdGroupIds($AdGroupIds)
    {
      $this->AdGroupIds = $AdGroupIds;
      return $this;
    }

}
