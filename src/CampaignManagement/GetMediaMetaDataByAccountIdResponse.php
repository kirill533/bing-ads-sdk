<?php

namespace PMG\BingAds\CampaignMangagement;

class GetMediaMetaDataByAccountIdResponse
{

    /**
     * @var ArrayOfMediaMetaData $MediaMetaData
     */
    protected $MediaMetaData = null;

    /**
     * @param ArrayOfMediaMetaData $MediaMetaData
     */
    public function __construct($MediaMetaData)
    {
      $this->MediaMetaData = $MediaMetaData;
    }

    /**
     * @return ArrayOfMediaMetaData
     */
    public function getMediaMetaData()
    {
      return $this->MediaMetaData;
    }

    /**
     * @param ArrayOfMediaMetaData $MediaMetaData
     * @return \PMG\BingAds\CampaignMangagement\GetMediaMetaDataByAccountIdResponse
     */
    public function setMediaMetaData($MediaMetaData)
    {
      $this->MediaMetaData = $MediaMetaData;
      return $this;
    }

}
