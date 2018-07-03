<?php

namespace PMG\BingAds\CampaignManagement;

class GetMediaMetaDataByAccountIdRequest
{

    /**
     * @see \PMG\BingAds\CampaignManagement\MediaEnabledEntityFilter for valid values
     *
     * @var list $MediaEnabledEntities
     */
    protected $MediaEnabledEntities = null;

    /**
     * @param list $MediaEnabledEntities
     */
    public function __construct($MediaEnabledEntities = null)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
    }

    /**
     * @return list
     */
    public function getMediaEnabledEntities()
    {
      return $this->MediaEnabledEntities;
    }

    /**
     * @param list $MediaEnabledEntities
     * @return \PMG\BingAds\CampaignManagement\GetMediaMetaDataByAccountIdRequest
     */
    public function setMediaEnabledEntities($MediaEnabledEntities)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
      return $this;
    }

}
