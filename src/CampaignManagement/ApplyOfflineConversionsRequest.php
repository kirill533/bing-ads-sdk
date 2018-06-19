<?php

namespace PMG\BingAds\CampaignManagement;

class ApplyOfflineConversionsRequest
{

    /**
     * @var ArrayOfOfflineConversion $OfflineConversions
     */
    protected $OfflineConversions = null;

    /**
     * @param ArrayOfOfflineConversion $OfflineConversions
     */
    public function __construct($OfflineConversions)
    {
      $this->OfflineConversions = $OfflineConversions;
    }

    /**
     * @return ArrayOfOfflineConversion
     */
    public function getOfflineConversions()
    {
      return $this->OfflineConversions;
    }

    /**
     * @param ArrayOfOfflineConversion $OfflineConversions
     * @return \PMG\BingAds\CampaignManagement\ApplyOfflineConversionsRequest
     */
    public function setOfflineConversions($OfflineConversions)
    {
      $this->OfflineConversions = $OfflineConversions;
      return $this;
    }

}
