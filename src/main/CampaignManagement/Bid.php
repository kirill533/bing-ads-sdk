<?php

namespace PMG\BingAds\CampaignManagement;

class Bid
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \PMG\BingAds\CampaignManagement\Bid
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

}
