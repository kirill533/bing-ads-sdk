<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByAdGroupIdResponse
{

    /**
     * @var ArrayOfAd $Ads
     */
    protected $Ads = null;

    /**
     * @param ArrayOfAd $Ads
     */
    public function __construct($Ads = null)
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByAdGroupIdResponse
     */
    public function setAds($Ads)
    {
        $this->Ads = $Ads;
        return $this;
    }

}
