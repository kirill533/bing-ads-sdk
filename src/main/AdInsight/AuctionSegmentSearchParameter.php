<?php

namespace PMG\BingAds\AdInsight;

class AuctionSegmentSearchParameter extends SearchParameter
{

    /**
     * @var AuctionSegment $Segment
     */
    protected $Segment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuctionSegment
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param AuctionSegment $Segment
     * @return \PMG\BingAds\AdInsight\AuctionSegmentSearchParameter
     */
    public function setSegment($Segment)
    {
      $this->Segment = $Segment;
      return $this;
    }

}
