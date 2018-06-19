<?php

namespace PMG\BingAds\CampaignManagement;

class FixedBid extends CriterionBid
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \PMG\BingAds\CampaignManagement\FixedBid
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
