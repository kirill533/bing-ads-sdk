<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignsByAccountIdRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var CampaignType $CampaignType
     */
    protected $CampaignType = null;

    /**
     * @param int $AccountId
     * @param CampaignType $CampaignType
     */
    public function __construct($AccountId, $CampaignType)
    {
      $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByAccountIdRequest
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
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
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByAccountIdRequest
     */
    public function setCampaignType($CampaignType)
    {
      $this->CampaignType = $CampaignType;
      return $this;
    }

}
