<?php

namespace PMG\BingAds\AdInsight;

class AdGroupBidLandscapeInput
{

    /**
     * @see \PMG\BingAds\AdInsight\AdGroupBidLandscapeType for valid values
     *
     * @var string $AdGroupBidLandscapeType
     */
    protected $AdGroupBidLandscapeType = null;

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdGroupBidLandscapeType()
    {
      return $this->AdGroupBidLandscapeType;
    }

    /**
     * @param string $AdGroupBidLandscapeType
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscapeInput
     */
    public function setAdGroupBidLandscapeType($AdGroupBidLandscapeType)
    {
      $this->AdGroupBidLandscapeType = $AdGroupBidLandscapeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\AdInsight\AdGroupBidLandscapeInput
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }

}
