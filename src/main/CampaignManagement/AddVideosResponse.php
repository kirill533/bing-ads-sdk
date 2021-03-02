<?php

namespace PMG\BingAds\CampaignManagement;

class AddVideosResponse
{

    /**
     * @var ArrayOflong $VideoIds
     */
    protected $VideoIds = null;

    /**
     * @var ArrayOfBatchError $PartialErrors
     */
    protected $PartialErrors = null;

    /**
     * @param ArrayOflong $VideoIds
     * @param ArrayOfBatchError $PartialErrors
     */
    public function __construct($VideoIds = null, $PartialErrors = null)
    {
    $this->VideoIds = $VideoIds;
    $this->PartialErrors = $PartialErrors;
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
     * @return \PMG\BingAds\CampaignManagement\AddVideosResponse
     */
    public function setVideoIds($VideoIds)
    {
        $this->VideoIds = $VideoIds;
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
     * @return \PMG\BingAds\CampaignManagement\AddVideosResponse
     */
    public function setPartialErrors($PartialErrors)
    {
        $this->PartialErrors = $PartialErrors;
        return $this;
    }

}
