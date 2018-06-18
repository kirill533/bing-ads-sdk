<?php

namespace PMG\BingAds\CampaignMangagement;

class InheritFromParentBiddingScheme extends BiddingScheme
{

    /**
     * @var string $InheritedBidStrategyType
     */
    protected $InheritedBidStrategyType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getInheritedBidStrategyType()
    {
      return $this->InheritedBidStrategyType;
    }

    /**
     * @param string $InheritedBidStrategyType
     * @return \PMG\BingAds\CampaignMangagement\InheritFromParentBiddingScheme
     */
    public function setInheritedBidStrategyType($InheritedBidStrategyType)
    {
      $this->InheritedBidStrategyType = $InheritedBidStrategyType;
      return $this;
    }

}
