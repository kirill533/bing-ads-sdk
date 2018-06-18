<?php

namespace PMG\BingAds\CampaignMangagement;

class GetMediaAssociationsRequest
{

    /**
     * @var MediaEnabledEntityFilter $MediaEnabledEntities
     */
    protected $MediaEnabledEntities = null;

    /**
     * @var ArrayOflong $MediaIds
     */
    protected $MediaIds = null;

    /**
     * @param MediaEnabledEntityFilter $MediaEnabledEntities
     * @param ArrayOflong $MediaIds
     */
    public function __construct($MediaEnabledEntities, $MediaIds)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
      $this->MediaIds = $MediaIds;
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
     * @return \PMG\BingAds\CampaignMangagement\GetMediaAssociationsRequest
     */
    public function setMediaEnabledEntities($MediaEnabledEntities)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getMediaIds()
    {
      return $this->MediaIds;
    }

    /**
     * @param ArrayOflong $MediaIds
     * @return \PMG\BingAds\CampaignMangagement\GetMediaAssociationsRequest
     */
    public function setMediaIds($MediaIds)
    {
      $this->MediaIds = $MediaIds;
      return $this;
    }

}
