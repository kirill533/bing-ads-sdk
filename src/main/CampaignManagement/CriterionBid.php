<?php

namespace PMG\BingAds\CampaignManagement;

class CriterionBid
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \PMG\BingAds\CampaignManagement\CriterionBid
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

}
