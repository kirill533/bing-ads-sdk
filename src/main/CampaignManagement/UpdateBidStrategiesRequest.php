<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateBidStrategiesRequest
{

    /**
     * @var ArrayOfBidStrategy $BidStrategies
     */
    protected $BidStrategies = null;

    /**
     * @param ArrayOfBidStrategy $BidStrategies
     */
    public function __construct($BidStrategies = null)
    {
    $this->BidStrategies = $BidStrategies;
    }

    /**
     * @return ArrayOfBidStrategy
     */
    public function getBidStrategies()
    {
        return $this->BidStrategies;
    }

    /**
     * @param ArrayOfBidStrategy $BidStrategies
     * @return \PMG\BingAds\CampaignManagement\UpdateBidStrategiesRequest
     */
    public function setBidStrategies($BidStrategies)
    {
        $this->BidStrategies = $BidStrategies;
        return $this;
    }

}
