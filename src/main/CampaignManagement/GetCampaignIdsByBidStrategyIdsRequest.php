<?php

namespace PMG\BingAds\CampaignManagement;

class GetCampaignIdsByBidStrategyIdsRequest
{

    /**
     * @var ArrayOflong $BidStrategyIds
     */
    protected $BidStrategyIds = null;

    /**
     * @param ArrayOflong $BidStrategyIds
     */
    public function __construct($BidStrategyIds = null)
    {
    $this->BidStrategyIds = $BidStrategyIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getBidStrategyIds()
    {
        return $this->BidStrategyIds;
    }

    /**
     * @param ArrayOflong $BidStrategyIds
     * @return \PMG\BingAds\CampaignManagement\GetCampaignIdsByBidStrategyIdsRequest
     */
    public function setBidStrategyIds($BidStrategyIds)
    {
        $this->BidStrategyIds = $BidStrategyIds;
        return $this;
    }

}
