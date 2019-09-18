<?php

namespace PMG\BingAds\CampaignManagement;

class TargetRoasBiddingScheme extends BiddingScheme
{

    /**
     * @var Bid $MaxCpc
     */
    protected $MaxCpc = null;

    /**
     * @var float $TargetRoas
     */
    protected $TargetRoas = null;

    
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
     * @return \PMG\BingAds\CampaignManagement\TargetRoasBiddingScheme
     */
    public function setMaxCpc($MaxCpc)
    {
        $this->MaxCpc = $MaxCpc;
        return $this;
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
     * @return \PMG\BingAds\CampaignManagement\TargetRoasBiddingScheme
     */
    public function setTargetRoas($TargetRoas)
    {
        $this->TargetRoas = $TargetRoas;
        return $this;
    }

}
