<?php

namespace PMG\BingAds\CampaignManagement;

class MaxRoasBiddingScheme extends BiddingScheme
{

    /**
     * @var Bid $MaxCpc
     */
    protected $MaxCpc = null;

    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Bid
     */
    public function getMaxCpc()
    {
        return $this->MaxCpc;
    }

    /**
     * @param Bid $MaxCpc
     * @return \PMG\BingAds\CampaignManagement\MaxRoasBiddingScheme
     */
    public function setMaxCpc($MaxCpc)
    {
        $this->MaxCpc = $MaxCpc;
        return $this;
    }

}
