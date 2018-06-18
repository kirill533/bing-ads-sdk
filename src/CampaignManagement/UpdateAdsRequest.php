<?php

namespace PMG\BingAds\CampaignMangagement;

class UpdateAdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOfAd $Ads
     */
    protected $Ads = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOfAd $Ads
     */
    public function __construct($AdGroupId, $Ads)
    {
      $this->AdGroupId = $AdGroupId;
      $this->Ads = $Ads;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->AdGroupId;
    }

    /**
     * @param int $AdGroupId
     * @return \PMG\BingAds\CampaignMangagement\UpdateAdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
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
     * @return \PMG\BingAds\CampaignMangagement\UpdateAdsRequest
     */
    public function setAds($Ads)
    {
      $this->Ads = $Ads;
      return $this;
    }

}
