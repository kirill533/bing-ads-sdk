<?php

namespace PMG\BingAds\CampaignManagement;

class GetMediaAssociationsRequest
{

    /**
     * @see \PMG\BingAds\CampaignManagement\MediaEnabledEntityFilter for valid values
     *
     * @var list $MediaEnabledEntities
     */
    protected $MediaEnabledEntities = null;

    /**
     * @var ArrayOflong $MediaIds
     */
    protected $MediaIds = null;

    /**
     * @param list $MediaEnabledEntities
     * @param ArrayOflong $MediaIds
     */
    public function __construct($MediaEnabledEntities = null, $MediaIds = null)
    {
      $this->MediaEnabledEntities = $MediaEnabledEntities;
      $this->MediaIds = $MediaIds;
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
     * @return \PMG\BingAds\CampaignManagement\GetMediaAssociationsRequest
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
     * @return \PMG\BingAds\CampaignManagement\GetMediaAssociationsRequest
     */
    public function setMediaIds($MediaIds)
    {
      $this->MediaIds = $MediaIds;
      return $this;
    }

}
