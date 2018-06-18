<?php

namespace PMG\BingAds\CampaignMangagement;

class MaxClicksBiddingScheme extends BiddingScheme
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
     * @return \PMG\BingAds\CampaignMangagement\MaxClicksBiddingScheme
     */
    public function setMaxCpc($MaxCpc)
    {
      $this->MaxCpc = $MaxCpc;
      return $this;
    }

}
