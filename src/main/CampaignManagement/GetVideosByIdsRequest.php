<?php

namespace PMG\BingAds\CampaignManagement;

class GetVideosByIdsRequest
{

    /**
     * @var ArrayOflong $VideoIds
     */
    protected $VideoIds = null;

    /**
     * @var Paging $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param ArrayOflong $VideoIds
     * @param Paging $PageInfo
     */
    public function __construct($VideoIds = null, $PageInfo = null)
    {
    $this->VideoIds = $VideoIds;
    $this->PageInfo = $PageInfo;
    }

    /**
     * @return ArrayOflong
     */
    public function getVideoIds()
    {
        return $this->VideoIds;
    }

    /**
     * @param ArrayOflong $VideoIds
     * @return \PMG\BingAds\CampaignManagement\GetVideosByIdsRequest
     */
    public function setVideoIds($VideoIds)
    {
        $this->VideoIds = $VideoIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetVideosByIdsRequest
     */
    public function setPageInfo($PageInfo)
    {
        $this->PageInfo = $PageInfo;
        return $this;
    }

}
