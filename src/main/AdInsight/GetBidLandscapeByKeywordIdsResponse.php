<?php

namespace PMG\BingAds\AdInsight;

class GetBidLandscapeByKeywordIdsResponse
{

    /**
     * @var ArrayOfKeywordBidLandscape $BidLandscape
     */
    protected $BidLandscape = null;

    /**
     * @param ArrayOfKeywordBidLandscape $BidLandscape
     */
    public function __construct($BidLandscape = null)
    {
      $this->BidLandscape = $BidLandscape;
    }

    /**
     * @return ArrayOfKeywordBidLandscape
     */
    public function getBidLandscape()
    {
      return $this->BidLandscape;
    }

    /**
     * @param ArrayOfKeywordBidLandscape $BidLandscape
     * @return \PMG\BingAds\AdInsight\GetBidLandscapeByKeywordIdsResponse
     */
    public function setBidLandscape($BidLandscape)
    {
      $this->BidLandscape = $BidLandscape;
      return $this;
    }

}
