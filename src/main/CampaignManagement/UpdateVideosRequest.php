<?php

namespace PMG\BingAds\CampaignManagement;

class UpdateVideosRequest
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
     * @return \PMG\BingAds\CampaignManagement\UpdateVideosRequest
     */
    public function setVideos($Videos)
    {
        $this->Videos = $Videos;
        return $this;
    }

}
