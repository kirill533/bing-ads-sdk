<?php

namespace PMG\BingAds\CampaignMangagement;

class GetMediaMetaDataByAccountIdRequest
{

    /**
     * @var MediaEnabledEntityFilter $MediaEnabledEntities
     */
    protected $MediaEnabledEntities = null;

    /**
     * @param MediaEnabledEntityFilter $MediaEnabledEntities
     */
    public function __construct($MediaEnabledEntities)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
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
     * @return \PMG\BingAds\CampaignMangagement\GetMediaMetaDataByAccountIdRequest
     */
    public function setMediaEnabledEntities($MediaEnabledEntities)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
      return $this;
    }

}
