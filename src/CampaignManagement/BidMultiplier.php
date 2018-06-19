<?php

namespace PMG\BingAds\CampaignManagement;

class BidMultiplier extends CriterionBid
{

    /**
     * @var float $Multiplier
     */
    protected $Multiplier = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return float
     */
    public function getMultiplier()
    {
      return $this->Multiplier;
    }

    /**
     * @param float $Multiplier
     * @return \PMG\BingAds\CampaignManagement\BidMultiplier
     */
    public function setMultiplier($Multiplier)
    {
      $this->Multiplier = $Multiplier;
      return $this;
    }

}
