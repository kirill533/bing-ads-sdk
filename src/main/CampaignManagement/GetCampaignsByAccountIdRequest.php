<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignsByAccountIdRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @see \PMG\BingAds\CampaignManagement\CampaignType for valid values
     *
     * @var list $CampaignType
     */
    protected $CampaignType = null;

    /**
     * @param int $AccountId
     * @param list $CampaignType
     */
    public function __construct($AccountId = null, $CampaignType = null)
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
     * @return list
     */
    public function getCampaignType()
    {
      return $this->CampaignType;
    }

    /**
     * @param list $CampaignType
     * @return \PMG\BingAds\CampaignManagement\GetCampaignsByAccountIdRequest
     */
    public function setCampaignType($CampaignType)
    {
      $this->CampaignType = $CampaignType;
      return $this;
    }

}
