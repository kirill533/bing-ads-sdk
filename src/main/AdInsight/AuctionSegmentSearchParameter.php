<?php

namespace PMG\BingAds\AdInsight;

class AuctionSegmentSearchParameter extends SearchParameter
{

    /**
     * @see \PMG\BingAds\AdInsight\AuctionSegment for valid values
     *
     * @var string $Segment
     */
    protected $Segment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param string $Segment
     * @return \PMG\BingAds\AdInsight\AuctionSegmentSearchParameter
     */
    public function setSegment($Segment)
    {
      $this->Segment = $Segment;
      return $this;
    }

}
