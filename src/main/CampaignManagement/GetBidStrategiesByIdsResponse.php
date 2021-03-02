<?php

namespace PMG\BingAds\CampaignManagement;

class GetBidStrategiesByIdsResponse
{

    /**
     * @var ArrayOfBidStrategy $BidStrategies
     */
    protected $BidStrategies = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfBidStrategy $BidStrategies
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($BidStrategies = null, $PartialErrors = null)
    {
    $this->BidStrategies = $BidStrategies;
    $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetBidStrategiesByIdsResponse
     */
    public function setBidStrategies($BidStrategies)
    {
        $this->BidStrategies = $BidStrategies;
        return $this;
    }

    /**
     * @return ArrayOfBatchError
     */
    public function getPartialErrors()
    {
        return $this->PartialErrors;
    }

    /**
     * @param ArrayOfBatchError $PartialErrors
     * @return \PMG\BingAds\CampaignManagement\GetBidStrategiesByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
