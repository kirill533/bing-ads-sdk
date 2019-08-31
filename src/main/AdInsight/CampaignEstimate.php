<?php

namespace PMG\BingAds\AdInsight;

class CampaignEstimate
{

    /**
     * @var ArrayOfAdGroupEstimate $AdGroupEstimates
     */
    protected $AdGroupEstimates = null;

    /**
     * @var int $CampaignId
     */
    protected $CampaignId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAdGroupEstimate
     */
    public function getAdGroupEstimates()
    {
        return $this->AdGroupEstimates;
    }

    /**
     * @param ArrayOfAdGroupEstimate $AdGroupEstimates
     * @return \PMG\BingAds\AdInsight\CampaignEstimate
     */
    public function setAdGroupEstimates($AdGroupEstimates)
    {
        $this->AdGroupEstimates = $AdGroupEstimates;
        return $this;
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
     * @return \PMG\BingAds\AdInsight\CampaignEstimate
     */
    public function setCampaignId($CampaignId)
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

}
