<?php

namespace PMG\BingAds\AdInsight;

class AuctionInsightEntry
{

    /**
     * @var string $DisplayDomain
     */
    protected $DisplayDomain = null;

    /**
     * @var AuctionInsightKpi $AggregatedKpi
     */
    protected $AggregatedKpi = null;

    /**
     * @var ArrayOfAuctionInsightKpi $SegmentedKpis
     */
    protected $SegmentedKpis = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDisplayDomain()
    {
      return $this->DisplayDomain;
    }

    /**
     * @param string $DisplayDomain
     * @return \PMG\BingAds\AdInsight\AuctionInsightEntry
     */
    public function setDisplayDomain($DisplayDomain)
    {
      $this->DisplayDomain = $DisplayDomain;
      return $this;
    }

    /**
     * @return AuctionInsightKpi
     */
    public function getAggregatedKpi()
    {
      return $this->AggregatedKpi;
    }

    /**
     * @param AuctionInsightKpi $AggregatedKpi
     * @return \PMG\BingAds\AdInsight\AuctionInsightEntry
     */
    public function setAggregatedKpi($AggregatedKpi)
    {
      $this->AggregatedKpi = $AggregatedKpi;
      return $this;
    }

    /**
     * @return ArrayOfAuctionInsightKpi
     */
    public function getSegmentedKpis()
    {
      return $this->SegmentedKpis;
    }

    /**
     * @param ArrayOfAuctionInsightKpi $SegmentedKpis
     * @return \PMG\BingAds\AdInsight\AuctionInsightEntry
     */
    public function setSegmentedKpis($SegmentedKpis)
    {
      $this->SegmentedKpis = $SegmentedKpis;
      return $this;
    }

}
