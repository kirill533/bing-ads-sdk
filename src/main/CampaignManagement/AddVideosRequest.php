<?php

namespace PMG\BingAds\CampaignManagement;

class AddVideosRequest
{

    /**
     * @var ArrayOfVideo $Videos
     */
    protected $Videos = null;

    /**
     * @param ArrayOfVideo $Videos
     */
    public function __construct($Videos = null)
    {
    $this->Videos = $Videos;
    }

    /**
     * @return ArrayOfVideo
     */
    public function getVideos()
    {
        return $this->Videos;
    }

    /**
     * @param ArrayOfVideo $Videos
     * @return \PMG\BingAds\CampaignManagement\AddVideosRequest
     */
    public function setVideos($Videos)
    {
        $this->Videos = $Videos;
        return $this;
    }

}
