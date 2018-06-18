<?php

namespace PMG\BingAds\CampaignMangagement;

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
     * @return \PMG\BingAds\CampaignMangagement\ApplyOfflineConversionsRequest
     */
    public function setOfflineConversions($OfflineConversions)
    {
      $this->OfflineConversions = $OfflineConversions;
      return $this;
    }

}
