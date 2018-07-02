<?php

namespace PMG\BingAds\AdInsight;

class KeywordEstimatedBid
{

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

    /**
     * @var ArrayOfEstimatedBidAndTraffic $EstimatedBids
     */
    protected $EstimatedBids = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param string $Keyword
     * @return \PMG\BingAds\AdInsight\KeywordEstimatedBid
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return ArrayOfEstimatedBidAndTraffic
     */
    public function getEstimatedBids()
    {
      return $this->EstimatedBids;
    }

    /**
     * @param ArrayOfEstimatedBidAndTraffic $EstimatedBids
     * @return \PMG\BingAds\AdInsight\KeywordEstimatedBid
     */
    public function setEstimatedBids($EstimatedBids)
    {
      $this->EstimatedBids = $EstimatedBids;
      return $this;
    }

}
