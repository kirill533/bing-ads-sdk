<?php

namespace PMG\BingAds\CampaignManagement;

class CampaignNegativeSites
{

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    /**
     * @var ArrayOfstring $NegativeSites
     */
    protected $NegativeSites = null;

    
    public function __construct()
    {
    
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
     * @return \PMG\BingAds\CampaignManagement\CampaignNegativeSites
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNegativeSites()
    {
        return $this->NegativeSites;
    }

    /**
     * @param ArrayOfstring $NegativeSites
     * @return \PMG\BingAds\CampaignManagement\CampaignNegativeSites
     */
    public function setNegativeSites($NegativeSites)
    {
        $this->NegativeSites = $NegativeSites;
        return $this;
    }

}
