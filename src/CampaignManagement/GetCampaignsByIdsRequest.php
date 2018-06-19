<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignsByIdsRequest
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
     * @var CampaignType $CampaignType
     */
    protected $CampaignType = null;

    /**
     * @param int $AccountId
     * @param ArrayOflong $CampaignIds
     * @param CampaignType $CampaignType
     */
    public function __construct($AccountId, $CampaignIds, $CampaignType)
    {
      $this->AccountId = $AccountId;
      $this->CampaignIds = $CampaignIds;
      $this->CampaignType = $CampaignType;
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setCampaignIds($CampaignIds)
    {
      $this->CampaignIds = $CampaignIds;
      return $this;
    }

    /**
     * @return CampaignType
     */
    public function getCampaignType()
    {
      return $this->CampaignType;
    }

    /**
     * @param CampaignType $CampaignType
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByIdsRequest
     */
    public function setCampaignType($CampaignType)
    {
      $this->CampaignType = $CampaignType;
      return $this;
    }

}
