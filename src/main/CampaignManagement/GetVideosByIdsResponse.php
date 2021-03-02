<?php

namespace PMG\BingAds\CampaignManagement;

class GetVideosByIdsResponse
{

    /**
     * @var ArrayOfVideo $Videos
     */
    protected $Videos = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOfVideo $Videos
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($Videos = null, $PartialErrors = null)
    {
    $this->Videos = $Videos;
    $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\GetVideosByIdsResponse
     */
    public function setVideos($Videos)
    {
        $this->Videos = $Videos;
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
     * @return \PMG\BingAds\CampaignManagement\GetVideosByIdsResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
