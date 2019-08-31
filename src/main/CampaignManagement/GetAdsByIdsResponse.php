<?php

namespace PMG\BingAds\CampaignManagement;

class GetAdsByIdsResponse
{

    /**
     * @var ArrayOfAd $Ads
     */
    protected $Ads = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfAd $Ads
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Ads = null, $PartialErrors = null)
    {
    $this->Ads = $Ads;
    $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsResponse
     */
    public function setAds($Ads)
    {
        $this->Ads = $Ads;
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
     * @return \PMG\BingAds\CampaignManagement\GetAdsByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
