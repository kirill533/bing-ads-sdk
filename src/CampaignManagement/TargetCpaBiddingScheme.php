<?php

namespace PMG\BingAds\CampaignMangagement;

class TargetCpaBiddingScheme extends BiddingScheme
{

    /**
     * @var Bid $MaxCpc
     */
    protected $MaxCpc = null;

    /**
     * @var float $TargetCpa
     */
    protected $TargetCpa = null;

    
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
     * @return \PMG\BingAds\CampaignMangagement\TargetCpaBiddingScheme
     */
    public function setMaxCpc($MaxCpc)
    {
      $this->MaxCpc = $MaxCpc;
      return $this;
    }

    /**
     * @return float
     */
    public function getTargetCpa()
    {
      return $this->TargetCpa;
    }

    /**
     * @param float $TargetCpa
     * @return \PMG\BingAds\CampaignMangagement\TargetCpaBiddingScheme
     */
    public function setTargetCpa($TargetCpa)
    {
      $this->TargetCpa = $TargetCpa;
      return $this;
    }

}
