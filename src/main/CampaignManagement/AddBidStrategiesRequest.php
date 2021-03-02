<?php

namespace PMG\BingAds\CampaignManagement;

class AddBidStrategiesRequest
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
     * @return \PMG\BingAds\CampaignManagement\AddBidStrategiesRequest
     */
    public function setBidStrategies($BidStrategies)
    {
        $this->BidStrategies = $BidStrategies;
        return $this;
    }

}
