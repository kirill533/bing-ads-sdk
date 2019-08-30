<?php

namespace PMG\BingAds\CampaignManagement;

class GetMediaMetaDataByAccountIdRequest
{

    /**
     * @var MediaEnabledEntityFilter $MediaEnabledEntities
     */
    protected $MediaEnabledEntities = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param MediaEnabledEntityFilter $MediaEnabledEntities
     * @param Paging $PageInfo
     */
    public function __construct($MediaEnabledEntities = null, $PageInfo = null)
    {
    $this->MediaEnabledEntities = $MediaEnabledEntities;
    $this->PageInfo = $PageInfo;
    }

    /**
     * @return MediaEnabledEntityFilter
     */
    public function getMediaEnabledEntities()
    {
        return $this->MediaEnabledEntities;
    }

    /**
     * @param MediaEnabledEntityFilter $MediaEnabledEntities
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByAccountIdRequest
     */
    public function setMediaEnabledEntities($MediaEnabledEntities)
    {
        $this->MediaEnabledEntities = $MediaEnabledEntities;
        return $this;
    }

    /**
     * @return Paging
     */
    public function getPageInfo()
    {
        return $this->PageInfo;
    }

    /**
     * @param Paging $PageInfo
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByAccountIdRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

}
