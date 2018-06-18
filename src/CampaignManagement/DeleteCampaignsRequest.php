<?php

namespace PMG\BingAds\CampaignMangagement;

class DeleteCampaignsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOflong $CampaignIds
     */
    protected $CampaignIds = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $CampaignIds
     */
    public function __construct($AccountId, $CampaignIds)
    {
      $this->AccountId = $AccountId;
      $this->CampaignIds = $CampaignIds;
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
     * @return \PMG\BingAds\CampaignMangagement\DeleteCampaignsRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getCampaignIds()
    {
      return $this->CampaignIds;
    }

    /**
     * @param ArrayOflong $CampaignIds
     * @return \PMG\BingAds\CampaignMangagement\DeleteCampaignsRequest
     */
    public function setCampaignIds($CampaignIds)
    {
      $this->CampaignIds = $CampaignIds;
      return $this;
    }

}
