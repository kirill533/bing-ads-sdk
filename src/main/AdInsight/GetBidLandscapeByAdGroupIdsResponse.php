<?php

namespace PMG\BingAds\AdInsight;

class GetBidLandscapeByAdGroupIdsResponse
{

    /**
     * @var ArrayOfAdGroupBidLandscape $BidLandscape
     */
    protected $BidLandscape = null;

    /**
     * @param ArrayOfAdGroupBidLandscape $BidLandscape
     */
    public function __construct($BidLandscape = null)
    {
      $this->BidLandscape = $BidLandscape;
    }

    /**
     * @return ArrayOfAdGroupBidLandscape
     */
    public function getBidLandscape()
    {
      return $this->BidLandscape;
    }

    /**
     * @param ArrayOfAdGroupBidLandscape $BidLandscape
     * @return \PMG\BingAds\AdInsight\GetBidLandscapeByAdGroupIdsResponse
     */
    public function setBidLandscape($BidLandscape)
    {
      $this->BidLandscape = $BidLandscape;
      return $this;
    }

}
