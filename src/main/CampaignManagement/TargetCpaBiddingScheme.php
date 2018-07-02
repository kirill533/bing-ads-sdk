<?php

namespace PMG\BingAds\CampaignManagement;

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
     * @return \PMG\BingAds\CampaignManagement\TargetCpaBiddingScheme
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
     * @return \PMG\BingAds\CampaignManagement\TargetCpaBiddingScheme
     */
    public function setTargetCpa($TargetCpa)
    {
      $this->TargetCpa = $TargetCpa;
      return $this;
    }

}
