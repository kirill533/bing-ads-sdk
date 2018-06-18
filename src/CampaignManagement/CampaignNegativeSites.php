<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\CampaignNegativeSites
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
     * @return \PMG\BingAds\CampaignMangagement\CampaignNegativeSites
     */
    public function setNegativeSites($NegativeSites)
    {
      $this->NegativeSites = $NegativeSites;
      return $this;
    }

}
