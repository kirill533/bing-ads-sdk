<?php

namespace PMG\BingAds\CampaignManagement;

class SetNegativeSitesToCampaignsRequest
{

    /**
     * @var int $AccountId
     */
    protected $AccountId = null;

    /**
     * @var ArrayOfCampaignNegativeSites $CampaignNegativeSites
     */
    protected $CampaignNegativeSites = null;

    /**
     * @param int $AccountId
     * @param ArrayOfCampaignNegativeSites $CampaignNegativeSites
     */
    public function __construct($AccountId = null, $CampaignNegativeSites = null)
    {
    $this->AccountId = $AccountId;
    $this->CampaignNegativeSites = $CampaignNegativeSites;
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
     * @return \PMG\BingAds\CampaignManagement\SetNegativeSitesToCampaignsRequest
     */
    public function setAccountId($AccountId)
    {
        $this->AccountId = $AccountId;
        return $this;
    }

    /**
     * @return ArrayOfCampaignNegativeSites
     */
    public function getCampaignNegativeSites()
    {
        return $this->CampaignNegativeSites;
    }

    /**
     * @param ArrayOfCampaignNegativeSites $CampaignNegativeSites
     * @return \PMG\BingAds\CampaignManagement\SetNegativeSitesToCampaignsRequest
     */
    public function setCampaignNegativeSites($CampaignNegativeSites)
    {
        $this->CampaignNegativeSites = $CampaignNegativeSites;
        return $this;
    }

}
