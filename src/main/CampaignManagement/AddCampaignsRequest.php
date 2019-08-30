<?php

namespace PMG\BingAds\CampaignManagement;

class AddCampaignsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfCampaign $Campaigns
     */
    protected $Campaigns = null;

    /**
     * @var boolean $IncludeDynamicSearchAdsSource
     */
    protected $IncludeDynamicSearchAdsSource = null;

    /**
     * @param int $AccountId
     * @param ArrayOfCampaign $Campaigns
     * @param boolean $IncludeDynamicSearchAdsSource
     */
    public function __construct($AccountId = null, $Campaigns = null, $IncludeDynamicSearchAdsSource = null)
    {
    $this->AccountId = $AccountId;
    $this->Campaigns = $Campaigns;
    $this->IncludeDynamicSearchAdsSource = $IncludeDynamicSearchAdsSource;
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
     * @return \PMG\BingAds\CampaignManagement\AddCampaignsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\AddCampaignsRequest
     */
    public function setCampaigns($Campaigns)
    {
        $this->Campaigns = $Campaigns;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeDynamicSearchAdsSource()
    {
        return $this->IncludeDynamicSearchAdsSource;
    }

    /**
     * @param boolean $IncludeDynamicSearchAdsSource
     * @return \PMG\BingAds\CampaignManagement\AddCampaignsRequest
     */
    public function setIncludeDynamicSearchAdsSource($IncludeDynamicSearchAdsSource)
    {
        $this->IncludeDynamicSearchAdsSource = $IncludeDynamicSearchAdsSource;
        return $this;
    }

}
