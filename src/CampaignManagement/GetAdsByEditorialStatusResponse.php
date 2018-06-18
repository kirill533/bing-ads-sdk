<?php

namespace PMG\BingAds\CampaignMangagement;

class GetAdsByEditorialStatusResponse
{

    /**
     * @var ArrayOfAd $Ads
     */
    protected $Ads = null;

    /**
     * @param ArrayOfAd $Ads
     */
    public function __construct($Ads)
    {
      $this->Ads = $Ads;
    }

    /**
     * @return ArrayOfAd
     */
    public function getAds()
    {
      return $this->Ads;
    }

    /**
     * @param ArrayOfAd $Ads
     * @return \PMG\BingAds\CampaignMangagement\GetAdsByEditorialStatusResponse
     */
    public function setAds($Ads)
    {
      $this->Ads = $Ads;
      return $this;
    }

}
