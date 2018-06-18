<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\Bid
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
