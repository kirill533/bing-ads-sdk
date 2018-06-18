<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedBidByKeywordsResponse
{

    /**
     * @var ArrayOfKeywordEstimatedBid $KeywordEstimatedBids
     */
    protected $KeywordEstimatedBids = null;

    /**
     * @var EstimatedBidAndTraffic $AdGroupEstimatedBid
     */
    protected $AdGroupEstimatedBid = null;

    /**
     * @param ArrayOfKeywordEstimatedBid $KeywordEstimatedBids
     * @param EstimatedBidAndTraffic $AdGroupEstimatedBid
     */
    public function __construct($KeywordEstimatedBids, $AdGroupEstimatedBid)
    {
      $this->KeywordEstimatedBids = $KeywordEstimatedBids;
      $this->AdGroupEstimatedBid = $AdGroupEstimatedBid;
    }

    /**
     * @return ArrayOfKeywordEstimatedBid
     */
    public function getKeywordEstimatedBids()
    {
      return $this->KeywordEstimatedBids;
    }

    /**
     * @param ArrayOfKeywordEstimatedBid $KeywordEstimatedBids
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsResponse
     */
    public function setKeywordEstimatedBids($KeywordEstimatedBids)
    {
      $this->KeywordEstimatedBids = $KeywordEstimatedBids;
      return $this;
    }

    /**
     * @return EstimatedBidAndTraffic
     */
    public function getAdGroupEstimatedBid()
    {
      return $this->AdGroupEstimatedBid;
    }

    /**
     * @param EstimatedBidAndTraffic $AdGroupEstimatedBid
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordsResponse
     */
    public function setAdGroupEstimatedBid($AdGroupEstimatedBid)
    {
      $this->AdGroupEstimatedBid = $AdGroupEstimatedBid;
      return $this;
    }

}
