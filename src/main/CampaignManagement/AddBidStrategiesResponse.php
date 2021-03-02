<?php

namespace PMG\BingAds\CampaignManagement;

class AddBidStrategiesResponse
{

    /**
     * @var ArrayOfNullableOflong $BidStrategyIds
     */
    protected $BidStrategyIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfNullableOflong $BidStrategyIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($BidStrategyIds = null, $PartialErrors = null)
    {
    $this->BidStrategyIds = $BidStrategyIds;
    $this->PartialErrors = $PartialErrors;
    }

    /**
     * @return ArrayOfNullableOflong
     */
    public function getBidStrategyIds()
    {
        return $this->BidStrategyIds;
    }

    /**
     * @param ArrayOfNullableOflong $BidStrategyIds
     * @return \PMG\BingAds\CampaignManagement\AddBidStrategiesResponse
     */
    public function setBidStrategyIds($BidStrategyIds)
    {
        $this->BidStrategyIds = $BidStrategyIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddBidStrategiesResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
