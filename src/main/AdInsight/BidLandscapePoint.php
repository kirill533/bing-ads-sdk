<?php

namespace PMG\BingAds\AdInsight;

class BidLandscapePoint
{

    /**
     * @var float $Bid
     */
    protected $Bid = null;

    /**
     * @var float $Clicks
     */
    protected $Clicks = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var int $TopImpressions
     */
    protected $TopImpressions = null;

    /**
     * @see \PMG\BingAds\AdInsight\CurrencyCode for valid values
     *
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $MarginalCPC
     */
    protected $MarginalCPC = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getBid()
    {
      return $this->Bid;
    }

    /**
     * @param float $Bid
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setBid($Bid)
    {
      $this->Bid = $Bid;
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
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setClicks($Clicks)
    {
      $this->Clicks = $Clicks;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getTopImpressions()
    {
      return $this->TopImpressions;
    }

    /**
     * @param int $TopImpressions
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setTopImpressions($TopImpressions)
    {
      $this->TopImpressions = $TopImpressions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getMarginalCPC()
    {
      return $this->MarginalCPC;
    }

    /**
     * @param float $MarginalCPC
     * @return \PMG\BingAds\AdInsight\BidLandscapePoint
     */
    public function setMarginalCPC($MarginalCPC)
    {
      $this->MarginalCPC = $MarginalCPC;
      return $this;
    }

}
