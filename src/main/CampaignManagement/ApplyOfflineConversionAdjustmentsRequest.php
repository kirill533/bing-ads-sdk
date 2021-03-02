<?php

namespace PMG\BingAds\CampaignManagement;

class ApplyOfflineConversionAdjustmentsRequest
{

    /**
     * @var ArrayOfOfflineConversionAdjustment $OfflineConversionAdjustments
     */
    protected $OfflineConversionAdjustments = null;

    /**
     * @param ArrayOfOfflineConversionAdjustment $OfflineConversionAdjustments
     */
    public function __construct($OfflineConversionAdjustments = null)
    {
    $this->OfflineConversionAdjustments = $OfflineConversionAdjustments;
    }

    /**
     * @return ArrayOfOfflineConversionAdjustment
     */
    public function getOfflineConversionAdjustments()
    {
        return $this->OfflineConversionAdjustments;
    }

    /**
     * @param ArrayOfOfflineConversionAdjustment $OfflineConversionAdjustments
     * @return \PMG\BingAds\CampaignManagement\ApplyOfflineConversionAdjustmentsRequest
     */
    public function setOfflineConversionAdjustments($OfflineConversionAdjustments)
    {
        $this->OfflineConversionAdjustments = $OfflineConversionAdjustments;
        return $this;
    }

}
