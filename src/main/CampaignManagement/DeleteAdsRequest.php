<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteAdsRequest
{

    /**
     * @var int $AdGroupId
     */
    protected $AdGroupId = null;

    /**
     * @var ArrayOflong $AdIds
     */
    protected $AdIds = null;

    /**
     * @param int $AdGroupId
     * @param ArrayOflong $AdIds
     */
    public function __construct($AdGroupId = null, $AdIds = null)
    {
    $this->AdGroupId = $AdGroupId;
    $this->AdIds = $AdIds;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteAdsRequest
     */
    public function setAdGroupId($AdGroupId)
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getAdIds()
    {
        return $this->AdIds;
    }

    /**
     * @param ArrayOflong $AdIds
     * @return \PMG\BingAds\CampaignManagement\DeleteAdsRequest
     */
    public function setAdIds($AdIds)
    {
        $this->AdIds = $AdIds;
        return $this;
    }

}
