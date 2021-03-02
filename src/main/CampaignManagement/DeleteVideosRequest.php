<?php

namespace PMG\BingAds\CampaignManagement;

class DeleteVideosRequest
{

    /**
     * @var ArrayOflong $VideoIds
     */
    protected $VideoIds = null;

    /**
     * @param ArrayOflong $VideoIds
     */
    public function __construct($VideoIds = null)
    {
    $this->VideoIds = $VideoIds;
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
     * @return \PMG\BingAds\CampaignManagement\DeleteVideosRequest
     */
    public function setVideoIds($VideoIds)
    {
        $this->VideoIds = $VideoIds;
        return $this;
    }

}
