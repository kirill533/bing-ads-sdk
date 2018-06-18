<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\BidMultiplier
     */
    public function setMultiplier($Multiplier)
    {
      $this->Multiplier = $Multiplier;
      return $this;
    }

}
