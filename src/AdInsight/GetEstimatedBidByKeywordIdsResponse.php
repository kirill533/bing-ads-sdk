<?php

namespace PMG\BingAds\AdInsight;

class GetEstimatedBidByKeywordIdsResponse
{

    /**
     * @var ArrayOfKeywordIdEstimatedBid $KeywordEstimatedBids
     */
    protected $KeywordEstimatedBids = null;

    /**
     * @param ArrayOfKeywordIdEstimatedBid $KeywordEstimatedBids
     */
    public function __construct($KeywordEstimatedBids)
    {
      $this->KeywordEstimatedBids = $KeywordEstimatedBids;
    }

    /**
     * @return ArrayOfKeywordIdEstimatedBid
     */
    public function getKeywordEstimatedBids()
    {
      return $this->KeywordEstimatedBids;
    }

    /**
     * @param ArrayOfKeywordIdEstimatedBid $KeywordEstimatedBids
     * @return \PMG\BingAds\AdInsight\GetEstimatedBidByKeywordIdsResponse
     */
    public function setKeywordEstimatedBids($KeywordEstimatedBids)
    {
      $this->KeywordEstimatedBids = $KeywordEstimatedBids;
      return $this;
    }

}
