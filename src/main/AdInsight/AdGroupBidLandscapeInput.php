<?php

namespace PMG\BingAds\AdInsight;

class AdGroupBidLandscapeInput
{

    /**
     * @var AdGroupBidLandscapeType $AdGroupBidLandscapeType
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
     * @return AdGroupBidLandscapeType
     */
    public function getAdGroupBidLandscapeType()
    {
        return $this->AdGroupBidLandscapeType;
    }

    /**
     * @param AdGroupBidLandscapeType $AdGroupBidLandscapeType
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
