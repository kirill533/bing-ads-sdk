<?php

namespace PMG\BingAds\AdInsight;

class GetAuctionInsightDataResponse
{

    /**
     * @var AuctionInsightResult $Result
     */
    protected $Result = null;

    /**
     * @param AuctionInsightResult $Result
     */
    public function __construct($Result = null)
    {
      $this->Result = $Result;
    }

    /**
     * @return AuctionInsightResult
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param AuctionInsightResult $Result
     * @return \PMG\BingAds\AdInsight\GetAuctionInsightDataResponse
     */
    public function setResult($Result)
    {
      $this->Result = $Result;
      return $this;
    }

}
