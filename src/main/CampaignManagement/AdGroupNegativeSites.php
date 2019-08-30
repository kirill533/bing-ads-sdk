<?php

namespace PMG\BingAds\CampaignManagement;

class AdGroupNegativeSites
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

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
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\CampaignManagement\AdGroupNegativeSites
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
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
     * @return \PMG\BingAds\CampaignManagement\AdGroupNegativeSites
     */
    public function setNegativeSites($NegativeSites)
    {
        $this->NegativeSites = $NegativeSites;
        return $this;
    }

}
