<?php

namespace PMG\BingAds\AdInsight;

class GetBidLandscapeByAdGroupIdsRequest
{

    /**
     * @var ArrayOfAdGroupBidLandscapeInput $AdGroupBidLandscapeInputs
     */
    protected $AdGroupBidLandscapeInputs = null;

    /**
     * @param ArrayOfAdGroupBidLandscapeInput $AdGroupBidLandscapeInputs
     */
    public function __construct($AdGroupBidLandscapeInputs)
    {
      $this->AdGroupBidLandscapeInputs = $AdGroupBidLandscapeInputs;
    }

    /**
     * @return ArrayOfAdGroupBidLandscapeInput
     */
    public function getAdGroupBidLandscapeInputs()
    {
      return $this->AdGroupBidLandscapeInputs;
    }

    /**
     * @param ArrayOfAdGroupBidLandscapeInput $AdGroupBidLandscapeInputs
     * @return \PMG\BingAds\AdInsight\GetBidLandscapeByAdGroupIdsRequest
     */
    public function setAdGroupBidLandscapeInputs($AdGroupBidLandscapeInputs)
    {
      $this->AdGroupBidLandscapeInputs = $AdGroupBidLandscapeInputs;
      return $this;
    }

}
