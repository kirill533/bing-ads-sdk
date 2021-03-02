<?php

namespace PMG\BingAds\CampaignManagement;

class MaxConversionValueBiddingScheme extends BiddingScheme
{

    /**
     * @var float $TargetRoas
     */
    protected $TargetRoas = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return float
     */
    public function getTargetRoas()
    {
        return $this->TargetRoas;
    }

    /**
     * @param float $TargetRoas
     * @return \PMG\BingAds\CampaignManagement\MaxConversionValueBiddingScheme
     */
    public function setTargetRoas($TargetRoas)
    {
        $this->TargetRoas = $TargetRoas;
        return $this;
    }

}
