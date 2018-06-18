<?php

namespace PMG\BingAds\AdInsight;

class TrafficEstimate
{

    /**
     * @var float $AverageCpc
     */
    protected $AverageCpc = null;

    /**
     * @var float $AveragePosition
     */
    protected $AveragePosition = null;

    /**
     * @var float $Clicks
     */
    protected $Clicks = null;

    /**
     * @var float $Ctr
     */
    protected $Ctr = null;

    /**
     * @var float $Impressions
     */
    protected $Impressions = null;

    /**
     * @var float $TotalCost
     */
    protected $TotalCost = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAverageCpc()
    {
      return $this->AverageCpc;
    }

    /**
     * @param float $AverageCpc
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setAverageCpc($AverageCpc)
    {
      $this->AverageCpc = $AverageCpc;
      return $this;
    }

    /**
     * @return float
     */
    public function getAveragePosition()
    {
      return $this->AveragePosition;
    }

    /**
     * @param float $AveragePosition
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setAveragePosition($AveragePosition)
    {
      $this->AveragePosition = $AveragePosition;
      return $this;
    }

    /**
     * @return float
     */
    public function getClicks()
    {
      return $this->Clicks;
    }

    /**
     * @param float $Clicks
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setClicks($Clicks)
    {
      $this->Clicks = $Clicks;
      return $this;
    }

    /**
     * @return float
     */
    public function getCtr()
    {
      return $this->Ctr;
    }

    /**
     * @param float $Ctr
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setCtr($Ctr)
    {
      $this->Ctr = $Ctr;
      return $this;
    }

    /**
     * @return float
     */
    public function getImpressions()
    {
      return $this->Impressions;
    }

    /**
     * @param float $Impressions
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param float $TotalCost
     * @return \PMG\BingAds\AdInsight\TrafficEstimate
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

}
